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
        Schema::create('cl_communes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('code_deis')->nullable();
            $table->foreignId('region_id')->constrained('cl_regions');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cl_communes');
    }
};
