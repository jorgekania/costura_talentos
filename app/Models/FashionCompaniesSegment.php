<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionCompaniesSegment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'id_fashion_companies',
        'id_fashion_segment',
        'is_active',
    ];
}
