<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcomodacaoAnexo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'acomodacoes_anexos';

    protected $fillable = [
        'acomodacao_id',
        'caminho_anexo',
        'nome_original_arquivo',
    ];

    public function acomodacao()
    {
        return $this->belongsTo(Acomodacao::class, 'acomodacao_id');
    }
}
