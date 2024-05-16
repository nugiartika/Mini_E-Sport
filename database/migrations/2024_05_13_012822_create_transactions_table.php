<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->char('transaction_id', 48)->unique();
            $table->string('ref_id')->default(Str::random());
            $table->unsignedBigInteger('amount');
            $table->string('payment_method');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->foreignId('team_tournament_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status', ['PENDING', 'UNPAID', 'PAID', 'REFUND', 'EXPIRED', 'FAILED'])->default('PENDING');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
