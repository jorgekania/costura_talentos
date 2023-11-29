<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\PreferToWork;
use App\Helpers\MyDateTime;
use App\Enums\FormOfRemuneration;
use App\Helpers\MyNumbers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FashionVacancy extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        "id",
        "title",
        "fashion_company_id",
        "specializations_id",
        "time_experience",
        "work_where",
        "remuneration_value",
        "hiring_regime",
        "activities_and_responsibilities",
        "vacancy_requirements",
        "the_company_offers",
        "is_active",
    ];

    protected $casts = [
        "work_where" => FormOfRemuneration::class,
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->remuneration_value = $model->remunerationFloatToInt($model->remuneration_value);
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<FashionIndustrialMachines>
     */
    public function industrialMachines(): BelongsToMany
    {
        return $this->belongsToMany(
            FashionIndustrialMachines::class,
            "fashion_machines_vacancies",
            "fashion_vacancies_id",
            "industrial_machines_id"
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionProfessionalSpecialization, FashionVacancy>
     */
    public function specialization(): belongsTo
    {
        return $this->belongsTo(
            FashionProfessionalSpecialization::class,
            "specializations_id",
            "id"
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionCompany, FashionVacancy>
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(
            FashionCompany::class,
            "fashion_company_id",
            "id"
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany<FashionProfessional>
     */
    public function appliedProfessionals(): BelongsToMany
    {
        return $this->belongsToMany(
            FashionProfessional::class,
            "fashion_professional_applieds",
            "fashion_vacancies_id",
            "fashion_professional_id"
        )
            ->withPivot("is_active")
            ->withTimestamps();
    }

    public function getPublishedTimeAttribute()
    {
        $publisher = MyDateTime::diffInYearsMonthsDays(
            now(),
            $this->created_at
        );

        if ($publisher["minutes"] == 0) {
            return "agora";
        } elseif ($publisher["hours"] == 0) {
            return "à " . $publisher["minutes"] . " minutos";
        } elseif ($publisher["days"] == 0) {
            return "à " . $publisher["hours"] . " horas";
        } else {
            return "em " . MyDateTime::formatDate($this->created_at, "d/m/Y");
        }
    }

    public function remunerationFloatToInt($value)
    {
        return MyNumbers::onlyNumber($value);
    }
}
