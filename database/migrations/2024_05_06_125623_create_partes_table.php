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
        Schema::create('partes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('correlative')->default(0);
            $table->dateTime('entered_at');
            $table->foreignId('type_id')->nullable()->constrainde('doc_types');
            $table->boolean('reserved')->nullable();
            $table->date('date');
            $table->unsignedInteger('number')->nullable();
            $table->string('origin')->nullable();
            $table->text('subject');
            $table->boolean('important')->nullable();
            $table->boolean('physical_format')->nullable();
            $table->foreignId('establishment_id')->nullable()->constrained('establishments');
            // $table->dateTime('reception_date')->nullable();
            $table->timestamp('viewed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partes');
    }
};
