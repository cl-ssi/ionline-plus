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
        Schema::create('cfg_places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable()->default(NULL);
            $table->string('architectural_design_code')->nullable();
            $table->smallInteger('floor_number')->nullable();
            $table->foreignId('location_id')->constrained('cfg_locations')->onDelete('restrict');
            $table->foreignId('establishment_id')->constrained('establishments')->onDelete('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cfg_places');
    }
};
