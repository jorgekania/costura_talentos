<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionMachinesVacancy extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'fashion_vacancies_id',
        'industrial_machines_id',
        'is_active',
    ];
}
