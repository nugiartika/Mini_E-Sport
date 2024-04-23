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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('pendaftaran');
            $table->date('permainan');
            $table->foreignId('categories_id')->constrained();
            $table->unsignedBigInteger('users_id')->nullable(); // Nullable agar bisa kosong
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('images');
            $table->text('description');
            $table->text('rule');
            $table->enum('status',['pending','rejected','accepted'])->default('pending');
            // $table->unsignedBigInteger('penyelenggara')->nullable();
            // $table->foreign('penyelenggara')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
