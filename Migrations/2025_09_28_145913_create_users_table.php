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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Users_name', 100);
            $table->string('Users_email', 100)->unique();
            $table->timestamp('Users_birth')->nullable();
            $table->string('Users_Phone', 20);
            $table->foreignId('gender_id')
              ->nullable()
              ->constrained('genders') // จะอ้างอิงไปที่ genders.id อัตโนมัติ
              ->onDelete('cascade');
            $table->string('Users_password', 100);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
