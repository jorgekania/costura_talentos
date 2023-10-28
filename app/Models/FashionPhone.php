<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FashionPhone extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'id',
        'fashion_company_id',
        'phone_type',
        'phone_number',
        'is_main',
        'is_active',
    ];

    public function fashionCompanies()
    {
        return $this->belongsTo(FashionCompany::class);
    }
}
