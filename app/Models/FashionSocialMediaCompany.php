<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\SocialMedia;
use App\Enums\RegistrationType;
use App\Models\FashionProfessional;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FashionSocialMediaCompany extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        "id",
        "fashion_company_id",
        "name_social_media",
        "social_media_url",
        "is_active",
    ];

    protected $casts = [
        "name_social_media" => SocialMedia::class,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionCompany, FashionSocialMediaCompany>
     */
    public function fashionCompany(): BelongsTo
    {
        return $this->belongsTo(FashionCompany::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionCompany, FashionSocialMediaCompany>
     */
    public function fashionProfessional(): BelongsTo
    {
        return $this->belongsTo(FashionProfessional::class);
    }
}
