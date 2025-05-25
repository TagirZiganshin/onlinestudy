<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebpagesTable extends Migration
{

    public function up(): void
    {
        if(!Schema::hasTable('webpages'))
        Schema::create('webpages', function (Blueprint $table) {
            $table->id();
    
            $table->string('url');
            $table->string('name');
            $table->timestamps();

            $table->foreignId('student_id')->constrained()->on('students')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('webpages');
    }
}

