<?php

namespace Database\Seeders;

use App\Models\Tamanho;
use Illuminate\Database\Seeder;

class TamanhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tamanho::create(['nome' => 'Pequeno']);
        Tamanho::create(['nome' => 'Médio']);
        Tamanho::create(['nome' => 'Grande']);
    }
}
