<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('acomodacoes_anexos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acomodacao_id')->constrained('acomodacoes');
            $table->string('caminho_anexo');
            $table->string('nome_original_arquivo');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('acomodacoes_anexos');
    }
};
