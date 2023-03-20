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
        Schema::create('account_models', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_phone');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('accounts_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('accounts_id')->references('id')->on('accounts');
            
           
            

          
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_models');
    }
};