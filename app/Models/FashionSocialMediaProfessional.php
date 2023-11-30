<?php

namespace App\Models;

use App\Enums\SocialMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FashionSocialMediaProfessional extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        "id",
        "fashion_professional_id",
        "name_social_media",
        "social_media_url",
        "is_active",
    ];

    protected $casts = [
        "name_social_media" => SocialMedia::class,
    ];
}
