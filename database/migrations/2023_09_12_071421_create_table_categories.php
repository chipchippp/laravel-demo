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
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); //unsigned big int
            $table->string('name', 150)->unique(); //varchar (255)
            $table->string('slug')->unique();
            $table->timestamps();  // created_at, update_at
        });
    }

    /**
     * Reverse the migrations.
     * php artisan migrate
     * rollback -> down
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
