<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fashion_phones_professionals', function (Blueprint $table) {
            $table->foreignUuid('id')->primary();

            $table->foreignUuid('fashion_professional_id')->constrained();
            $table->string('phone_type')->default('WHATSAPP');
            $table->string('phone_number');
            $table->boolean('is_main')->default(false);
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fashion_phones_professionals');
    }
};
