<?php

namespace Database\Seeders;

use App\Models\Finalidade;
use Illuminate\Database\Seeder;

class FinalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Finalidade::create(['nome' => 'Plantar']);
        Finalidade::create(['nome' => 'Presente']);
        Finalidade::create(['nome' => 'Plantar/Presente']);
    }
}
