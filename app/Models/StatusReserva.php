<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusReserva extends Model
{
    use HasFactory;

    protected $table = 'status_reservas';
    public $timestamps = false;
    protected $fillable = ['nome'];
}
