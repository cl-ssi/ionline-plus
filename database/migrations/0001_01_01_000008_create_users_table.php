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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('dv',1);
            $table->string('name');
            $table->string('fathers_family');
            $table->string('mothers_family');
            $table->string('full_name')->storedAs("CONCAT(name, ' ', fathers_family, ' ', mothers_family)");
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('commune_id')->nullable()->counstrained('cl_comunes');
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('email_personal')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->timestamp('password_changed_at')->nullable();
            $table->foreignId('establishment_id')->nullable()->constrained('establishments');
            $table->foreignId('organizational_unit_id')->nullable()->constrained('organizational_units');
            $table->string('position')->nullable();
            $table->string('vc_link')->nullable();
            $table->string('vc_alias')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('gravatar')->default(false);
            $table->boolean('external')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
