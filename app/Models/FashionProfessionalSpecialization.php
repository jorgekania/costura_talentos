<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionProfessionalSpecialization extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'id',
        'uuid',
        'specialization',
        'description',
        'is_active',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany<FashionVacancy, FashionProfessionalSpecialization>
     */
    public function vacancies(): hasMany
    {
        return $this->hasMany(FashionVacancy::class, 'specializations_id', 'id');
    }
}
