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
            $table->foreignId('training_id')->constrained('training')->cascadeOnDelete();
            $table->string('name', length:50);
            $table->enum('status', ['aktif', 'nonaktif']);
            $table->enum('gender', ['l', 'p']);
            $table->string('phone_number', length:13);
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
