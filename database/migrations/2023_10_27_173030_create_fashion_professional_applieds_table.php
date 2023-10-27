<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('fashion_professional_applieds', function (Blueprint $table) {
            $table->id();

            $table->foreignUuid('fashion_vacancies_id')->constrained();
            $table->foreignUuid('fashion_professional_id')->constrained();

            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fashion_professional_applieds');
    }
};
