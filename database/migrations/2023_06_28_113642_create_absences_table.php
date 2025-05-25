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
        if(!Schema::hasTable('absences'))
        Schema::create('absences', function (Blueprint $table) {
            $table->id();

            $table->string('attendance_status')->nullable();
            $table->boolean('disregarded')->nullable();
            $table->longText('note')->nullable();
            $table->timestamps();

            $table->foreignId('lecture_id')->constrained()->on('lectures')->onDelete('cascade');
            $table->foreignId('module_id')->constrained()->on('modules')->onDelete('cascade');
            $table->foreignId('training_id')->constrained()->on('trainings')->onDelete('cascade');
            $table->foreignId('student_id')->constrained()->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absences');
    }
};
