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
        Schema::create('payment_ins', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->integer('partyId');
            $table->string('paymentType');
            $table->longText('description')->nullable();
            $table->integer('receivedAmount');
            $table->string('paymentInCreatedAt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_ins');
    }
};
