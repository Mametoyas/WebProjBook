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
        Schema::create('token_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Users_payment_history_ID')->constrained('users_payment_histories')->onDelete('cascade');
            $table->integer('Token_num');
            $table->integer('Token_status_ID');
            $table->integer('Total_token');
            $table->foreignId('Users_ID')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('token_histories');
    }
};
