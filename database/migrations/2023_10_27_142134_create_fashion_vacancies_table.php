<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create('fashion_vacancies', function (Blueprint $table) {
            $table->foreignUuid('id')->primary();

            $table->string('title');

            $table->foreignUuid('fashion_company_id')->constrained();

            $table->foreignUuid('specializations_id');
            $table->foreign('specializations_id')->references('id')->on('fashion_professional_specializations');

            $table->integer('time_experience')->default(0);
            $table->string('work_where')->default('MÊS');
            $table->integer('remuneration_value')->default(0);
            $table->string('hiring_regime')->default('CLT');
            $table->text('activities_and_responsibilities');
            $table->text('vacancy_requirements');
            $table->text('the_company_offers');
            $table->boolean('is_active')->default(true);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fashion_vacancies');
    }
};
