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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id('sender_wallet_id');
            $table->decimal('amount');
            $table->string('curreny');
            $table->string('bank');
            $table->string('reciver_id');
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending');
            $table->timestamps();

          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
