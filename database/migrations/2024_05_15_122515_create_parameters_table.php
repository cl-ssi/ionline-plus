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
        Schema::create('cfg_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('module',50);
            $table->string('parameter');
            $table->string('value');
            $table->string('description')->nullable();
            $table->foreignId('establishment_id')->nullable()->constraint('establishments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cfg_parameters');
    }
};
