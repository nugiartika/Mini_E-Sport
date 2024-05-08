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
        Schema::create('juaras', function (Blueprint $table) {
            $table->id();
            $table->string('boFinal');
            $table->string('nama_juara1');
            $table->string('nama_juara2');
            $table->string('nama_juara3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juaras');
    }
};
