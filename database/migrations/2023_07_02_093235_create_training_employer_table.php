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
        if(!Schema::hasTable('training_employer'))
        Schema::create('training_employer', function (Blueprint $table) {
            $table->id();

            $table->timestamps();

            $table->foreignId('training_id')->constrained()->on('trainings')->onDelete('cascade');
            $table->foreignId('employer_id')->constrained()->on('employers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_employer');
    }
};
