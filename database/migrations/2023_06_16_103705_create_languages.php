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
        if(!Schema::hasTable('languages'))
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
       $table->foreignId('student_id')
                  ->constrained()
                  ->onDelete('cascade');
            $table->float('score',8,2);
            $table->string('language');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
