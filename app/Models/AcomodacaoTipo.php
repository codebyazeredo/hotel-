<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcomodacaoTipo extends Model
{
    use HasFactory;
    protected $table = 'acomodacoes_tipos';

    protected $fillable = [
        'nome',
        'descricao',
    ];

    public function acomodacoes()
    {
        return $this->hasMany(Acomodacao::class, 'acomodacao_tipo_id');
    }
}
