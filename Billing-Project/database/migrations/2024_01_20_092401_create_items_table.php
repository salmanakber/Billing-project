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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('itemId');
            $table->integer('userId');
            $table->longText('itemData');
            $table->integer('salePrice');
            $table->integer('wholeSalePrice')->nullable();
            $table->integer('purchasePrice')->nullabale();
            $table->longText('stockData')->nullable();
            $table->string('itemType')->default('product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
