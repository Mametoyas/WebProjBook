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
        Schema::create('users_payment_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Users_ID')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamp('Date')->nullable();
            $table->integer('Token');
            $table->integer('Token_price');
            $table->string('Resepit_img', 255);
            $table->foreignId('Status_ID')->nullable()->constrained('payment_status')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_payment_histories');
    }
};
