<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPagamento extends Model
{
    use HasFactory;

    protected $table = 'status_pagamentos';
    public $timestamps = false;
    protected $fillable = ['nome'];
}
