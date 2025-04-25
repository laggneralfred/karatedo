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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth')->nullable();
            $table->enum('sex', ['M', 'F', 'Other'])->nullable();
            $table->string('address_block')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('date_joined')->nullable();
            $table->string('photo_path')->nullable(); // Path to profile photo
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
