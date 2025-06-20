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
        if(!Schema::hasTable('file_trainings'))
        Schema::create('file_trainings', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('path');
            $table->timestamps();
            $table->foreignId('training_id')->constrained()->on('trainings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_trainings');
    }
};
