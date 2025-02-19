<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPagamentosSeeder extends Seeder
{
    public function run()
    {
        DB::table('status_pagamentos')->insert([
            ['nome' => 'pendente'],
            ['nome' => 'pago'],
        ]);
    }
}
