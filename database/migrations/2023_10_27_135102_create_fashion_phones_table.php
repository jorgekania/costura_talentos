<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('fashion_phones', function (Blueprint $table) {
            $table->foreignUuid('id')->primary();

            $table->foreignUuid('fashion_company_id')->constrained();

            $table->string('professional_or_company')->default('PROFESSIONAL');
            $table->string('phone_type')->default('WHATSAPP');
            $table->string('phone_number');
            $table->boolean('is_main')->default(false);
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fashion_phones');
    }
};
