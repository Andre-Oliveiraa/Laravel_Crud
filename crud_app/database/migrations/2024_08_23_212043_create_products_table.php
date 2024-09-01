<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_product')->nullable();
            $table->string('mark')->nullable();
            $table->string('category')->nullable();
            $table->decimal('purchase_value', 8, 2)->nullable();
            $table->decimal('sale_value', 8, 2)->nullable();
            $table->integer('stock_quantity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};