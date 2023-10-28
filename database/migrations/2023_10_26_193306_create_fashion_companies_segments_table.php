<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('fashion_companies_segments', function (Blueprint $table) {
            $table->id();

            $table->foreignUuid('fashion_company_id')->constrained();

            $table->foreignId('fashion_segment_id')->constrained();

            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fashion_companies_segments');
    }
};
