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
        Schema::create('add_banks', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('bankName');
            $table->integer('openingBalance');
            $table->string('asOfTime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_banks');
    }
};
