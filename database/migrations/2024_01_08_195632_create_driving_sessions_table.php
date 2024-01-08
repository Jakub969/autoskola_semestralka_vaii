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
        Schema::create('driving_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->dateTime('session_date');
            $table->integer('duration');
            $table->string('location');
            $table->string('status');
            $table->timestamps();
            $table->unsignedBigInteger('car_id');

            $table->foreign('car_id')->references('id')->on('cars');
            $table->foreign('instructor_id')->references('id')->on('users');
            $table->foreign('student_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driving_sessions');
    }
};
