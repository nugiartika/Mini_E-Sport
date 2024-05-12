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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->date('tanggalPenyisihan');
            $table->time('waktuPenyisihan');
            $table->string('boPenyisihan');
            $table->date('tanggalSemi');
            $table->time('waktuSemi');
            $table->string('boSemi');
            $table->date('tanggalFinal');
            $table->time('waktuFinal');
            $table->string('boFinal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
