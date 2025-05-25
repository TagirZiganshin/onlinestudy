<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{

    public function up(): void
    {
        if(!Schema::hasTable('skills'))
        Schema::create('skills', function (Blueprint $table) {
            $table->id();

            $table->string('skill');
            $table->timestamps();

            $table->foreignId('student_id')->constrained()->on('students')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
}

