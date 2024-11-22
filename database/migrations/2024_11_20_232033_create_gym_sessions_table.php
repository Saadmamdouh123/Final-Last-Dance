<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('gym_sessions', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Session name
        $table->dateTime('start_time'); // Start time
        $table->dateTime('end_time'); // End time
        $table->integer('capacity'); // Max participants
        $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Max participants
        $table->timestamps(); // Created at and updated at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym_sessions');
    }
};
