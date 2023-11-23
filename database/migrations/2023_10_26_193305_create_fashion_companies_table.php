<?php

declare(strict_types=1);

use App\Enums\CompanySize;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("fashion_companies", function (Blueprint $table) {
            $table->foreignUuid("id")->primary();
            $table->string("corporate_reason");
            $table->string("email");
            $table->string("password")->nullable();
            $table->string("logo")->nullable();
            $table->string("provider")->nullable();
            $table->string("zip_code")->nullable();
            $table->string("address")->nullable();
            $table->string("number")->nullable();
            $table->string("neighborhood")->nullable();
            $table->string("complement")->nullable();
            $table->string("city")->nullable();
            $table->string("long_state")->nullable();
            $table->string("short_state", 2)->nullable();
            $table->string("company_size")->default("GRANDE");
            $table->text("description")->nullable();
            $table->string("website")->nullable();
            $table->boolean("is_active")->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("fashion_companies");
    }
};
