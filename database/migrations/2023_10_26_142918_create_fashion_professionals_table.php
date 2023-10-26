<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fashion_professionals', function (Blueprint $table) {
            $table->foreignUuid('id');
            $table->string('name');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->string('zip_code');
            $table->string('address');
            $table->string('number');
            $table->string('neighborhood');
            $table->string('complement')->nullable();
            $table->string('city');
            $table->string('long_state');
            $table->string('short_state', 2);
            $table->text('experience');
            $table->string('portifolio_url')->nullable();
            $table->string('curriculum_url')->nullable();
            $table->integer('time_experience')->default(0);
            $table->string('prefer_to_work_where')->default('COMPANIES');
            $table->string('hiring_regime')->default('CLT');
            $table->string('form_of_remuneration')->default('MONTH');
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
