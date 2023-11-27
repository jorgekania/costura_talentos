<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\RegistrationType;
use App\Enums\SocialMedia;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionSocialMedia extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        "id",
        "fashion_company_id",
        "professional_or_company",
        "name_social_media",
        "social_media_url",
        "is_active",
    ];

    protected $casts = [
        "professional_or_company" => RegistrationType::class,
        "name_social_media" => SocialMedia::class,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionCompany, FashionSocialMedia>
     */
    public function fashionCompany(): BelongsTo
    {
        return $this->belongsTo(FashionCompany::class);
    }
}
