<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionProfessional extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<FashionVacancy>
     */
    public function appliedVacancies(): BelongsToMany
    {
        return $this->belongsToMany(FashionVacancy::class, 'fashion_professional_applieds', 'fashion_professional_id', 'fashion_vacancies_id')
            ->withPivot('is_active')
            ->withTimestamps();
    }
}
