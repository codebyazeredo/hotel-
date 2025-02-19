<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hoteis';

    protected $fillable = [
        'nome',
        'descricao',
        'endereco',
        'telefone',
        'email',
    ];
}
