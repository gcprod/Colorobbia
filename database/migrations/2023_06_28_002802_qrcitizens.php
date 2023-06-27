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
        Schema::create('qrcitizens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namakk');
            $table->integer('norumah');
            $table->integer('rt');
            $table->integer('rw');
            $table->text('status');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
