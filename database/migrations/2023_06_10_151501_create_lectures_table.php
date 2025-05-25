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
                Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('start_date')->default(now());
            $table->date('end_date')->default(now());
            $table->integer('estimate')->default(10);
            $table->timestamps();

        });
          Schema::create('modules', function (Blueprint $table) {
         $table->id();
    $table->foreignId('training_id')
          ->constrained('trainings')
          ->onDelete('cascade');
    $table->foreignId('student_id')
          ->nullable()
          ->constrained('students')
          ->onDelete('cascade');
    $table->string('title');
    $table->text('description');
    $table->timestamps();
        });
        if(!Schema::hasTable('lectures'))
        Schema::create('lectures', function (Blueprint $table) {
         $table->id();
    $table->foreignId('module_id')
          ->constrained()
          ->onDelete('cascade');
    $table->foreignId('training_id')
          ->constrained()
          ->onDelete('cascade');
    $table->foreignId('student_id')
          ->nullable()
          ->constrained()
          ->onDelete('cascade');
    $table->string('title');
    $table->longText('description');
    $table->date('date');
    $table->text('homework')->nullable();
    $table->timestamps();
        });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::dropIfExists('trainings');
    Schema::dropIfExists('modules');
        Schema::dropIfExists('lectures');
    }
};
