<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionCompany extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $table = "fashion_companies";

    protected $fillable = [
        'id',
        'corporate_reason',
        'email',
        'password',
        'logo',
        'zip_code',
        'address',
        'number',
        'neighborhood',
        'complement',
        'city',
        'long_state',
        'short_state',
        'fashion_segment',
        'company_size',
        'description',
        'website',
        'is_active',
    ];

    public function segments()
    {
        return $this->belongsToMany(FashionSegment::class, 'fashion_companies_segments')
            ->withPivot('is_active')
            ->withTimestamps();
    }

    public function activeSegments()
    {
        return $this->belongsToMany(FashionSegment::class, 'fashion_companies_segments')
            ->wherePivot('is_active', true)
            ->withPivot('is_active')
            ->withTimestamps();
    }

    public function phones()
    {
        return $this->belongsToMany(FashionPhone::class, 'fashion_phones')
            ->wherePivot('is_active', true)
            ->withTimestamps();
    }

    public function socialMedia()
    {
        return $this->belongsToMany(FashionSocialMedia::class, 'fashion_social_media')
            ->wherePivot('is_active', true)
            ->withTimestamps();
    }

    public function vacancy()
    {
        return $this->belongsToMany(FashionVacancy::class, 'fashion_vacancies')
            ->wherePivot('is_active', true)
            ->withTimestamps();
    }

}
