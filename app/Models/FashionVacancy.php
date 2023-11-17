<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\FormOfRemuneration;
use App\Enums\PreferToWork;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionVacancy extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'id',
        'title',
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

    protected $casts = [
        'work_where' => FormOfRemuneration::class
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<FashionIndustrialMachines>
     */
    public function industrialMachines(): BelongsToMany
    {
        return $this->belongsToMany(FashionIndustrialMachines::class, 'fashion_machines_vacancies', 'fashion_vacancies_id', 'industrial_machines_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionProfessionalSpecialization, FashionVacancy>
     */
    public function specialization(): belongsTo
    {
        return $this->belongsTo(FashionProfessionalSpecialization::class, 'specializations_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionCompany, FashionVacancy>
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(FashionCompany::class, 'fashion_company_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<FashionProfessional>
     */
    public function appliedProfessionals(): BelongsToMany
    {
        return $this->belongsToMany(FashionProfessional::class, 'fashion_professional_applieds', 'fashion_vacancies_id', 'fashion_professional_id')
            ->withPivot('is_active')
            ->withTimestamps();
    }
}
