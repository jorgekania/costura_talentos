<?php

namespace App\Models;

use App\Models\FashionVacancy;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionProfessional extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $fillable = [
        'id',
        'avatar',
        'name',
        'password',
        'email',
        'zip_code',
        'address',
        'number',
        'neighborhood',
        'complement',
        'city',
        'long_state',
        'short_state',
        'experience',
        'portifolio_url',
        'curriculum_url',
        'time_experience',
        'prefer_to_work_where',
        'hiring_regime',
        'form_of_remuneration',
        'remuneration_value',
        'is_active',
    ];

    public function appliedVacancies()
    {
        return $this->belongsToMany(FashionVacancy::class, 'fashion_professional_applieds', 'fashion_professional_id', 'fashion_vacancies_id')
            ->withPivot('is_active')
            ->withTimestamps();
    }
}
