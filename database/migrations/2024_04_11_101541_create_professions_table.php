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
        Schema::create('cfg_professions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('estament_id')->constrained('cfg_estaments');
            $table->string('sirh_plant')->nullable();
            $table->string('sirh_profession')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cfg_professions');
    }
};
