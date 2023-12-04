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
        Schema::create('fashion_professional_experiences', function (Blueprint $table) {
            $table->id();

            $table->foreignUuid('fashion_professional_id')->constrained('fashion_professionals', 'id', 'fashion_professional_experience_id');

            $table->string('company_name');
            $table->string('position');
            $table->integer('remuneration')->nullable();
            $table->string('hierarchical_level');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('curreent_job')->default(0);
            $table->text('description_activities');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fashion_professional_experiences');
    }
};
