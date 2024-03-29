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
        Schema::create('add_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->integer('partyId');
            $table->integer('itemId');
            $table->integer('itemQnty');
            $table->string('itemUnit');
            $table->integer('itemPriceParUnit');
            $table->integer('amount');
            $table->string('pymentType');
            $table->longText('description')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('total');
            $table->integer('advanceAmount')->nullable();
            $table->integer('balance');
            $table->string('orderDate');
            $table->string('dueDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_sales');
    }
};
