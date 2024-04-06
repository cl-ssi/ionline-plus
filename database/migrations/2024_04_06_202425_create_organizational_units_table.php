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
        Schema::create('organizational_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('level');
            $table->foreignId('organizational_unit_id')->nullable()->constrained('organizational_units');
            $table->foreignId('establishment_id')->constrained('establishments');
            $table->string('sirh_function');
            $table->string('sirh_ou_id');
            $table->string('sirh_cost_center');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('establishments', function (Blueprint $table) {
            $table->foreignId('father_organizational_unit_id')->after('mail_director')->nullable()->constrained('organizational_units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizational_units');
        
        Schema::table('establishments', function (Blueprint $table) {
            $table->dropForeign(['father_organizational_unit_id']);
            $table->dropColumn('father_organizational_unit_id');
        });
    }
};
