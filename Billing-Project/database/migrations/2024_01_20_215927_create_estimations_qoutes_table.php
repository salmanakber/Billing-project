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
        Schema::create('estimations_qoutes', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->integer('partyId');
            $table->integer('itemId');
            $table->integer('itemQnty');
            $table->integer('itemUnit');
            $table->integer('itemUnitPrice');
            $table->integer('amount');
            $table->integer('discount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estimations_qoutes');
    }
};
