<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('fashion_machines_vacancies', function (Blueprint $table) {
            $table->id();

            $table->foreignUuid('fashion_vacancies_id')->constrained();

            $table->unsignedBigInteger('industrial_machines_id');
            $table->foreign('industrial_machines_id')->references('id')->on('fashion_industrial_machines');
            $table->boolean('is_active')->default(true);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fashion_machines_vacancies');
    }
};
