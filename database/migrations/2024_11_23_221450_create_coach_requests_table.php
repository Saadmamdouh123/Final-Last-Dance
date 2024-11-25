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
        Schema::create('coach_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // The user making the request
            $table->string('status')->default('pending'); // Request status: pending, approved, rejected
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('coach_requests');
    }
};
