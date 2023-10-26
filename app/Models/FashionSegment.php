<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionSegment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'segment',
        'description',
        'is_active',
    ];
}
