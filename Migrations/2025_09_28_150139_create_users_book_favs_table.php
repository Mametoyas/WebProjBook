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
        Schema::create('users_book_favs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Users_ID')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('Book_ID')->nullable()->constrained('books')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_book_favs');
    }
};
