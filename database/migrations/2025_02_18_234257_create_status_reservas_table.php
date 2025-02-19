<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('status_reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('status_reservas');
    }
};
