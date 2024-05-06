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
            $table->integer('contact');
            $table->text('description');
            $table->text('rule');
            $table->json('prize')->nullable();
            $table->json('jumlah')->nullable();
            $table->enum('status',['pending','rejected','accepted'])->default('pending');
            $table->enum('paidment',['paid','unpaid']);
            $table->integer('nominal')->nullable();
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
