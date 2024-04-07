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
            $table->string('alias')->nullable();
            $table->string('type');
            $table->string('mother_code')->nullable();
            $table->string('new_mother_code')->nullable();
            $table->foreignId('establishment_type_id')->nullable()->constrained('establishment_types');
            $table->string('deis')->nullable();
            $table->string('new_deis')->nullable();
            $table->string('sirh_code')->nullable();
            $table->foreignId('commune_id')->constrained('cl_communes');
            $table->string('dependency')->nullable();
            $table->foreignId('health_service_id')->nullable()->constrained('health_services');
            $table->string('official_name')->nullable();
            $table->string('administrative_dependency')->nullable();
            $table->string('level_of_care')->nullable();
            $table->string('street_type')->nullable();
            $table->string('street_number')->nullable();
            $table->string('address')->nullable();
            $table->string('url')->nullable();
            $table->string('telephone')->nullable();
            $table->string('emergency_service')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('level_of_complexity')->nullable();
            $table->string('provider_type_health_system')->nullable();
            $table->string('mail_director')->nullable();
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
