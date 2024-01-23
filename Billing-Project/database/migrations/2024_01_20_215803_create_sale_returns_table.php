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
        Schema::create('sale_returns', function (Blueprint $table) {
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
            $table->integer('paidAmount')->nullable();
            $table->integer('balance');
            $table->string('return_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_returns');
    }
};
