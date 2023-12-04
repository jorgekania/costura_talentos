<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class FashionProfessionalAcademicEducation extends Model
{
    use HasFactory;

    protected $with = [
        "academicEducation",
        "countries"
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<FashionAcademicEducation
     */
    public function academicEducation(): HasOne
    {
        return $this->hasOne(FashionAcademicEducation::class, 'id','fashion_academic_education_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<FashionCountry
     */
    public function countries(): HasOne
    {
        return $this->hasOne(FashionCountry::class, 'id', 'fashion_country_id');
    }
}
