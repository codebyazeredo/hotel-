<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acomodacao extends Model
{
    use HasFactory;
    protected $table = 'acomodacoes';
    
    protected $fillable = [
        'hotel_id',
        'nome',
        'acomodacao_tipo_id',
        'capacidade',
        'preco_diaria',
        'disponivel',
        'descricao',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function tipo()
    {
        return $this->belongsTo(AcomodacaoTipo::class, 'acomodacao_tipo_id');
    }
}
