<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\HiringRegime;
use App\Enums\PreferToWork;
use Illuminate\Support\Str;
use App\Enums\FormOfRemuneration;
use Illuminate\Database\Eloquent\Model;
use App\Models\FashionPhonesProfessional;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\FashionSocialMediaProfessional;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\FashionProfessionalSpecialization;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FashionProfessional extends Model implements Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;
    use AuthenticatableTrait;

    protected $fillable = [
        "id",
        "avatar",
        "name",
        "password",
        "email",
        "provider",
        "zip_code",
        "address",
        "number",
        "neighborhood",
        "complement",
        "city",
        "long_state",
        "short_state",
        "experience",
        "portifolio_url",
        "curriculum_url",
        "time_experience",
        "prefer_to_work_where",
        "hiring_regime",
        "form_of_remuneration",
        "remuneration_value",
        "is_active",
    ];

    protected $casts = [
        "prefer_to_work_where" => PreferToWork::class,
        "hiring_regime" => HiringRegime::class,
        "form_of_remuneration" => FormOfRemuneration::class,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<FashionPhonesProfessional>
     */
    public function phones(): HasMany
    {
        return $this->hasMany(FashionPhonesProfessional::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<FashionSocialMediaProfessional>
     */
    public function socialMedia(): HasMany
    {
        return $this->hasMany(FashionSocialMediaProfessional::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne<FashionProfessionalSpecialization>
     */
    public function specialization(): HasOne
    {
        return $this->hasOne(
            FashionProfessionalSpecialization::class,
            "id",
            "specialty"
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<FashionProfessionalAcademicEducation>
     */
    public function academicEducation(): HasMany
    {
        return $this->hasMany(FashionProfessionalAcademicEducation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<FashionProfessionalExperience>
     */
    public function professionalExperiences(): HasMany
    {
        return $this->hasMany(FashionProfessionalExperience::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<FashionVacancy>
     */
    public function appliedVacancies(): BelongsToMany
    {
        return $this->belongsToMany(
            FashionVacancy::class,
            "fashion_professional_applieds",
            "fashion_professional_id",
            "fashion_vacancies_id"
        )
            ->withPivot("is_active")
            ->withTimestamps();
    }

    public function getShortNameAttribute()
    {
        $partsIgnored = ["de", "da", "do", "dos", "das"];
        $words = explode(" ", $this->name);

        $wordsFiltered = array_filter($words, function ($word) use (
            $partsIgnored
        ) {
            return !in_array($word, $partsIgnored);
        });

        $firstName = reset($wordsFiltered);
        $lastName = end($wordsFiltered);

        return $firstName . " " . $lastName;
    }

    public function getAddressProfessionalAttribute()
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
        $address = str_replace("/", "+-+", $this->address_professional);
        $formattedAddress = str_replace(" ", "+", $address);

        $googleMapsUrl =
            "https://www.google.com/maps/place/" . $formattedAddress;

        return $googleMapsUrl;
    }
}
