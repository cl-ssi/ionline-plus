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
        Schema::create('establishments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alias');
            $table->string('type');
            $table->string('mother_code');
            $table->string('new_mother_code');
            $table->foreignId('establishment_type_id')->constrained('establishment_types');
            $table->string('deis');
            $table->string('new_deis');
            $table->string('sirh_code');
            $table->foreignId('commune_id')->constrained('cl_communes');
            $table->string('dependency');
            $table->foreignId('health_services_id')->constrained('health_services');
            $table->string('official_name');
            $table->string('administrative_dependency');
            $table->string('level_of_care');
            $table->string('street_type');
            $table->string('street_number');
            $table->string('address');
            $table->string('url');
            $table->string('telephone');
            $table->string('emergency_service');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('level_of_complexity');
            $table->string('provider_type_health_system');
            $table->string('mail_director');
            $table->foreignId('father_organizational_unit_id')->constrained('organizational_units');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('establishments');
    }
};
