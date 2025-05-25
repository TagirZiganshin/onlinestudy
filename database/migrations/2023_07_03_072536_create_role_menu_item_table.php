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
        if(!Schema::hasTable('role_menu_item'))
        Schema::create('role_menu_item', function (Blueprint $table) {
            $table->id();
       
            $table->foreignId('role_id')->constrained()->on('roles')->onDelete('cascade');
            $table->foreignId('menu_item_id')->constrained()->on('menu_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_menu_item');
    }
};
