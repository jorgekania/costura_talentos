<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionSocialMedia extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $fillable = [
        'id',
        'fashion_company_id',
        'name_social_media',
        'social_media_url',
        'is_active',
    ];

    public function fashionCompany()
    {
        return $this->belongsTo(FashionCompany::class);
    }
}
