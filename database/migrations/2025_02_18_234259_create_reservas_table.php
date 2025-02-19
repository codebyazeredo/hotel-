<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hospede_id')->constrained('users');
            $table->foreignId('acomodacao_id')->constrained('acomodacoes');
            $table->date('data_check_in');
            $table->date('data_check_out');
            $table->integer('quantidade_hospedes');
            $table->decimal('valor_total');
            $table->foreignId('status_reserva_id')->constrained('status_reservas');
            $table->foreignId('status_pagamento_id')->constrained('status_pagamentos');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
