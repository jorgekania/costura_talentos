<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\PhoneType;
use App\Helpers\MyNumbers;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionPhone extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        "id",
        "fashion_company_id",
        "phone_type",
        "phone_number",
        "is_main",
        "is_active",
    ];

    protected $casts = [
        "phone_type" => PhoneType::class,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<FashionCompany, FashionPhone>
     */
    public function fashionCompanies(): BelongsTo
    {
        return $this->belongsTo(FashionCompany::class);
    }

    public function getFormattedPhoneNumberAttribute()
    {
        return MyNumbers::formatPhoneNumber($this->phone_number);
    }
}
