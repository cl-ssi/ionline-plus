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
        Schema::create('sign_approvals', function (Blueprint $table) {
            $table->id();
            $table->string('module');
            $table->string('module_icon')->nullable();
            $table->string('subject');
            $table->string('document_route_name');
            $table->string('document_route_params')->nullable();
            $table->string('document_pdf_path')->nullable();

            $table->foreignId('sent_to_ou_id')->nullable()->constrained('organizational_units');
            $table->foreignId('sent_to_user_id')->nullable()->constrained('users');

            $table->foreignId('approver_ou_id')->nullable()->constrained('organizational_units');
            $table->foreignId('approver_id')->nullable()->constrained('users');
            $table->string('approver_observation')->nullable();
            $table->datetime('approver_at')->nullable();
            $table->boolean('status')->nullable();

            $table->string('callback_controller_method')->nullable();
            $table->string('callback_controller_params')->nullable();
            $table->string('callback_feedback_inputs')->nullable();

            $table->boolean('active')->default(true);
            $table->foreignId('previous_approval_id')->nullable()->constrained('sign_approvals')->onDelete('cascade');
            $table->unsignedBigInteger('approvable_id')->nullable();
            $table->string('approvable_type')->nullable();
            $table->boolean('digital_signature')->default(0);
            $table->string('position')->nullable();
            $table->integer('startY')->nullable();
            $table->string('filename')->nullable();
            $table->boolean('endorse')->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approvals');
    }
};
