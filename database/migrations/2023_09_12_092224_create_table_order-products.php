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
        Schema::create('order-products', function (Blueprint $table) {
            $table->id('order_id');
            $table->string('product_id');
            $table->unsignedDecimal('price',14,2);
            $table->unsignedSmallInteger('qty')->default(0);
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('products_id')->references('id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order-products');
    }
};
