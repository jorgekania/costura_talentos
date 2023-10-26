<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionIndustrialMachines extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'machines',
        'description',
        'image',
        'is_active',

    ];
}
