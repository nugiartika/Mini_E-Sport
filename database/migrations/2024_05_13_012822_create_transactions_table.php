<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->id();
            $table->timestamps();
            $table->char('transaction_id', 36)->default(Str::uuid());
            $table->string('ref_id')->default(Str::random());
            $table->unsignedBigInteger('amount')->default(0);
            $table->string('payment_method');
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
