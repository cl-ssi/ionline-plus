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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('number',50)->nullable();
            $table->string('internal_number',50)->nullable();
            $table->date('date')->nullable();
            $table->foreignId('type_id')->constrained('doc_types');
            $table->boolean('reserved')->default(false);
            $table->string('antecedent')->nullable();
            $table->string('responsible')->nullable();
            $table->string('subject');
            $table->string('from')->nullable();
            $table->string('for')->nullable();
            $table->string('greater_hierarchy')->nullable();
            $table->text('distribution')->nullable();
            $table->longText('content');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('organizational_unit_id')->constrained('organizational_units');
            $table->foreignId('establishment_id')->nullable()->constrained('establishments');
            // $table->foreignId('file_to_sign_id')->nullable()->constrained('files');
            // $table->foreignId('signature_id')->nullable()->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
