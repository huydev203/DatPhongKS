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
        Schema::create('review', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('customer_id');
//            $table->unsignedBigInteger('room_id');
//            $table->text('comment');
////            $table->integer('satisfaction_level');
//            $table->timestamps();
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
