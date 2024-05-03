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
        Schema::create('rrhh_authorities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('organizational_unit_id')->constrained('organizational_units');
            $table->date('date');
            $table->string('position');
            $table->string('type');
            $table->string('decree')->nullable();
            $table->foreignId('representation_id')->nullable()->constrained('users');
            $table->time('from_time')->nullable();
            $table->time('to_time')->nullable();
            $table->timestamps();
            $table->softdeletes();
            $table->unique(['date','organizational_unit_id','type']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authorities');
    }
};
