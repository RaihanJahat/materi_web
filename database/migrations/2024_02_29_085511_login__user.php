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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('login_user', function (Blueprint $table) {
            $table->integer('UserID');
            $table->string('Username', 255);
            $table->string('Password', 255);
            $table->string('Email',255);
            $table->string('Nama_lengkap',255);
            $table->text('Alamat');
            $table->timestamps();
            $table->primary('UserID');
            
        });
    }
};