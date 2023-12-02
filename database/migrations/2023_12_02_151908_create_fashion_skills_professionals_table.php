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
        Schema::create('fashion_skills_professionals', function (Blueprint $table) {
            $table->id();

            $table->foreignUuid('fashion_professional_skill_id')->constrained('fashion_professionals', 'id', 'fashion_professional_skill_id');

            $table->foreignId('fashion_skill_id')->constrained('fashion_skills', 'id', 'fashion_skill_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fashion_skills_professionals');
    }
};
