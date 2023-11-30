<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\PhoneType;
use App\Helpers\MyNumbers;
use App\Enums\RegistrationType;
use App\Models\FashionProfessional;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FashionPhonesCompany extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        "id",
        "fashion_company_id",
        "phone_type",
        "phone_number",
        "is_main",
        "is_active",
    ];

    protected $casts = [
        "phone_type" => PhoneType::class
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionCompany, FashionPhonesCompany>
     */
    public function fashionCompanies(): BelongsTo
    {
        return $this->belongsTo(FashionCompany::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionCompany, FashionPhonesCompany>
     */
    public function fashionProfessional(): BelongsTo
    {
        return $this->belongsTo(FashionProfessional::class);
    }

    public function getFormattedPhoneNumberAttribute()
    {
        return MyNumbers::formatPhoneNumber($this->phone_number);
    }
}
