<?php

namespace App\Models;

use App\Enums\PhoneType;
use App\Enums\SocialMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FashionPhonesProfessional extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        "id",
        "fashion_professional_id",
        "phone_type",
        "phone_number",
        "is_main",
        "is_active",
    ];

    protected $casts = [
        "phone_type" => PhoneType::class,
    ];
}
