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
        Schema::create('commands', function (Blueprint $table) {
            $table->id();
            //$table->foreign('user_Id')->references('id')->on('users');
            //$table->unsignedBigInteger('user_Id');
            $table->unsignedBigInteger('menu_Id');
            $table->foreign('menu_Id')->references('id')->on('menus');
            $table->string('name');
            $table->string('secondname');
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->integer('quantity');
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commands');
    }
};
