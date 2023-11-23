<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('fashion_professionals', function (Blueprint $table) {
            $table->foreignUuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('provider')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('address')->nullable();
            $table->string('number')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('complement')->nullable();
            $table->string('city')->nullable();
            $table->string('long_state')->nullable();
            $table->string('short_state', 2)->nullable();
            $table->text('experience')->nullable();
            $table->string('portifolio_url')->nullable();
            $table->string('curriculum_url')->nullable();
            $table->integer('time_experience')->default(0);
            $table->string('prefer_to_work_where')->default('EMPRESA');
            $table->string('hiring_regime')->default('CLT');
            $table->string('form_of_remuneration')->default('MÊS');
            $table->integer('remuneration_value')->default(0);
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
        Schema::dropIfExists('fashion_professionals');
    }
};
