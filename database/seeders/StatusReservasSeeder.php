<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusReservasSeeder extends Seeder
{
    public function run()
    {
        DB::table('status_reservas')->insert([
            ['nome' => 'pendente'],
            ['nome' => 'confirmada'],
            ['nome' => 'cancelada'],
            ['nome' => 'finalizada'],
        ]);
    }
}
