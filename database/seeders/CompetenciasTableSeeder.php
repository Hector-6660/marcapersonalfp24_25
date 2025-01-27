<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ciclo = new \App\Models\Competencia();
        $ciclo->nombre = 'nombreCompetencia1';
        $ciclo->color = 'colorCompetencia1';
        $ciclo->save();
    }
}
