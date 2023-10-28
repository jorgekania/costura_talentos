<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionIndustrialMachines extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'machines',
        'description',
        'image',
        'is_active',

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionMachinesVacancy, FashionIndustrialMachines>
     */
    public function machines(): BelongsTo
    {
        return $this->belongsTo(FashionMachinesVacancy::class);
    }
}
