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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('Book_price');
            $table->string('Book_name', 200);
            $table->string('Book_img', 255);
            $table->string('Book_PDF_URL', 255);
            $table->string('Book_short_story', 500);
            $table->timestamp('Book_birth')->nullable();
            $table->string('Book_office', 100);
            $table->string('Book_writer', 100);
            $table->foreignId('Book_type_ID')->nullable()->constrained('book_types')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
