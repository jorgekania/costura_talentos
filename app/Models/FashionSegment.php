<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionSegment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'segment',
        'description',
        'is_active',
    ];

    public function companies()
    {
        return $this->belongsToMany(FashionCompany::class, 'fashion_companies_segments')
            ->withPivot('is_active')
            ->withTimestamps();
    }
}
