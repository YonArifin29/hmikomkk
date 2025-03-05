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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name', length:50);
            $table->string('image', length:200);
            $table->enum('status', ['senior', 'pengurus', 'kader']);
            $table->enum('gender', ['l', 'p']);
            $table->string('phone_number', length:13);
            $table->string('address', length:250);
            $table->date('year_of_entering_college');
            $table->date('year_of_entering_hmi');
            $table->date('date_of_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
