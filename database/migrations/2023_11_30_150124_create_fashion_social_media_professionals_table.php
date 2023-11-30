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
        Schema::create('fashion_social_media_professionals', function (Blueprint $table) {
            $table->foreignUuid('id')->primary();

            $table->foreignUuid('fashion_professional_id')->constrained('fashion_professionals', 'id', 'fashion_professional_id');

            $table->string('name_social_media');
            $table->string('social_media_url');
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
        Schema::dropIfExists('fashion_social_media_professionals');
    }
};
