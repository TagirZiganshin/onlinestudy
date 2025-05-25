<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoriesTable extends Migration
{

    public function up(): void
    {
        if(!Schema::hasTable('repositories'))
        Schema::create('repositories', function (Blueprint $table) {
            $table->id();
            $table->string('repository');
            $table->timestamps();

            $table->foreignId('student_id')->constrained()->on('students')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('repositories');
    }
}

