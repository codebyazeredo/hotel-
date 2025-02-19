<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('acomodacoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained('hoteis');
            $table->string('nome');
            $table->foreignId('acomodacao_tipo_id')->constrained('acomodacoes_tipos');
            $table->integer('capacidade');
            $table->decimal('preco_diaria');
            $table->boolean('disponivel')->default(true);
            $table->text('descricao')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('acomodacoes');
    }
};
