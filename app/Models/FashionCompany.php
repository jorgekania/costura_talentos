<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FashionCompany extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $fillable = [
        'id',
        'corporate_reason',
        'email',
        'password',
        'logo',
        'zip_code',
        'address',
        'number',
        'neighborhood',
        'complement',
        'city',
        'long_state',
        'short_state',
        'fashion_segment',
        'company_size',
        'description',
        'website',
        'is_active',
    ];

}
