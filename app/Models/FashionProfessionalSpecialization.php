<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FashionProfessionalSpecialization extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        "id",
        "specialization",
        "specialization_slug",
        "description",
        "is_active",
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany<FashionVacancy, FashionProfessionalSpecialization>
     */
    public function vacancies(): hasMany
    {
        return $this->hasMany(
            FashionVacancy::class,
            "specializations_id",
            "id"
        );
    }
}
