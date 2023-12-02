<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FashionSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'skill',
    ];
}
