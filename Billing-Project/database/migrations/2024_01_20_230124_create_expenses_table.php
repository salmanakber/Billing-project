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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->integer('expenseCate');
            $table->string('expenseTitle');
            $table->integer('expenseQnty');
            $table->integer('expensePrice');
            $table->integer('expenseAmount');
            $table->string('paymentType');
            $table->longText('description');
            $table->integer('total');
            $table->string('expenseCreatedAt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
