<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionVacancy extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'id',
        'fashion_company_id',
        'specializations_id',
        'time_experience',
        'work_where',
        'remuneration_value',
        'hiring_regime',
        'activities_and_responsibilities',
        'vacancy_requirements',
        'is_active',
    ];

    protected $with = [
        'machines',
    ];

    public function machines()
    {
        return $this->belongsToMany(FashionIndustrialMachines::class, 'fashion_machines_vacancies', 'fashion_vacancies_id', 'industrial_machines_id');
    }

    public function company()
    {
        return $this->belongsTo(FashionCompany::class);
    }

    public function appliedProfessionals()
    {
        return $this->belongsToMany(FashionProfessional::class, 'fashion_professional_applieds', 'fashion_vacancies_id', 'fashion_professional_id')
            ->withPivot('is_active')
            ->withTimestamps();
    }
}
