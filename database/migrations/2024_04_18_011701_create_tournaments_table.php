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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('pendaftaran');
            $table->date('permainan');
            $table->date('end_pendaftaran');
            $table->date('end_permainan');
            $table->foreignId('categories_id')->constrained();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('images');
            $table->integer('slotTeam');
            $table->char('contact', 24);
            $table->text('description');
            $table->text('rule');
            $table->json('prize')->nullable();
            $table->integer('jumlah')->nullable();
            $table->enum('status', ['pending','rejected','accepted'])->default('pending');
            $table->enum('paidment',['paid','unpaid']);
            $table->integer('nominal')->nullable();
            $table->date('tanggalPenyisihan');
            $table->time('waktuPenyisihan');
            $table->string('boPenyisihan');
            $table->date('tanggalSemi');
            $table->time('waktuSemi');
            $table->string('boSemi');
            $table->date('tanggalFinal');
            $table->time('waktuFinal');
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
        Schema::dropIfExists('tournaments');
    }
};
