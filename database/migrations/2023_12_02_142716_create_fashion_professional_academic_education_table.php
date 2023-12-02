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
        Schema::create('fashion_professional_academic_education', function (Blueprint $table) {
            $table->id();

            $table->foreignUuid('fashion_professional_id')->constrained('fashion_professionals', 'id', 'fashion_education_id');

            $table->foreignId('fashion_academic_education_id')->constrained('fashion_academic_education', 'id', 'fashion_academic_education_id');

            $table->string('institution_name');
            $table->foreignId('fashion_country_id')->constrained('fashion_countries', 'id', 'fashion_country_id');

            $table->string('state')->nullable();
            $table->string('status');
            $table->date('start_date');
            $table->date('end_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fashion_professional_academic_education');
    }
};
