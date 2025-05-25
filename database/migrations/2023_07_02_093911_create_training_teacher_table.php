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
        if(!Schema::hasTable('training_teacher'))
        Schema::create('training_teacher', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('training_id')->constrained()->on('trainings')->onDelete('cascade');
            $table->foreignId('teacher_id')->constrained()->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_teacher');
    }
};
