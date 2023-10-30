<?php

declare(strict_types=1);

use App\Enums\CompanySize;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    public function up(): void
    {
        Schema::create('fashion_companies', function (Blueprint $table) {
            $table->foreignUuid('id')->primary();
            $table->string('corporate_reason');
            $table->string('email');
            $table->string('password');
            $table->string('logo')->nullable();
            $table->string('zip_code');
            $table->string('address');
            $table->string('number');
            $table->string('neighborhood');
            $table->string('complement')->nullable();
            $table->string('city');
            $table->string('long_state');
            $table->string('short_state', 2);
            $table->string('company_size')->default('BIG');
            $table->text('description');
            $table->string('website')->nullable();
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fashion_companies');
    }
};
