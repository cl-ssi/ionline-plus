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
        Schema::create('doc_signature_requests', function (Blueprint $table) {
            $table->id();
            $table->dateTime('request_date');
            $table->string('original_file');
            $table->string('url')->nullable();
            $table->boolean('status')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('organizational_unit_id')->constrained('organizational_units');
            $table->foreignId('type_id')->constrained('doc_types');
            $table->string('subject');
            $table->text('description')->nullable();
            $table->text('recipients')->nullable();
            $table->text('distribution')->nullable();
            $table->boolean('reserved')->default(false);
            $table->boolean('oficial')->default(false);
            $table->boolean('sensitive')->default(false);
            $table->unsignedTinyInteger('signature_page')->default(0);
            $table->unsignedTinyInteger('response_within_days')->nullable();
            $table->foreignId('endorse_type_id')->constrained('doc_endorse_types');
            $table->string('verification_code')->nullable();
            $table->foreignId('last_approval_id')->nullable()->constrained('sign_approvals');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_signature_requests');
    }
};