<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reservas';
    
    protected $fillable = [
        'hospede_id',
        'acomodacao_id',
        'data_check_in',
        'data_check_out',
        'quantidade_hospedes',
        'valor_total',
        'status_reserva_id',
        'status_pagamento_id',
    ];

    public function hospede()
    {
        return $this->belongsTo(User::class, 'hospede_id');
    }

    public function acomodacao()
    {
        return $this->belongsTo(Acomodacao::class, 'acomodacao_id');
    }

    public function statusReserva()
    {
        return $this->belongsTo(StatusReserva::class, 'status_reserva_id');
    }

    public function statusPagamento()
    {
        return $this->belongsTo(StatusPagamento::class, 'status_pagamento_id');
    }
}
