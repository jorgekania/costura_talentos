<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CompanySize;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionCompany extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $table = "fashion_companies";

    protected $fillable = [
        "id",
        "corporate_reason",
        "email",
        "password",
        "logo",
        "zip_code",
        "address",
        "number",
        "neighborhood",
        "complement",
        "city",
        "long_state",
        "short_state",
        "fashion_segment",
        "company_size",
        "description",
        "website",
        "is_active",
    ];

    protected $casts = [
        "company_size" => CompanySize::class,
    ];

    protected $with = [
        "phones",
        "socialMedia",
        "vacancies",
        "segments",
        "activeSegments",
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<FashionSegment>
     */
    public function segments(): BelongsToMany
    {
        return $this->belongsToMany(
            FashionSegment::class,
            "fashion_companies_segments"
        )
            ->withPivot("is_active")
            ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<FashionSegment>
     */
    public function activeSegments(): BelongsToMany
    {
        return $this->belongsToMany(
            FashionSegment::class,
            "fashion_companies_segments"
        )
            ->wherePivot("is_active", true)
            ->withPivot("is_active")
            ->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<FashionPhone>
     */
    public function phones(): HasMany
    {
        return $this->hasMany(FashionPhone::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<FashionSocialMedia>
     */
    public function socialMedia(): HasMany
    {
        return $this->hasMany(FashionSocialMedia::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<FashionVacancy>
     */
    public function vacancies(): HasMany
    {
        return $this->hasMany(
            FashionVacancy::class,
            "fashion_company_id",
            "id"
        );
    }

    public function getAddressCompanyAttribute()
    {
        return $this->address .
            ", " .
            $this->number .
            ", " .
            $this->neighborhood .
            " - " .
            $this->city .
            "/" .
            $this->short_state;
    }

    public function getUrlGoogleMapsAttribute()
    {
        $address = str_replace("/", "+-+", $this->address_company);
        $formattedAddress = str_replace(" ", "+", $address);

        $googleMapsUrl =
            "https://www.google.com/maps/place/" . $formattedAddress;

        return $googleMapsUrl;
    }
}
