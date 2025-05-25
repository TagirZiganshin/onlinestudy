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
    if(!Schema::hasTable('student_training'))
        Schema::create('student_training', function (Blueprint $table) {
            $table->id();
            
            $table->timestamps();

            $table->foreignId('student_id')->constrained()->on('students')->onDelete('cascade');
            $table->foreignId('training_id')->constrained()->on('trainings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_training');
    }
};
