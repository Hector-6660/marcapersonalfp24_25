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
        $competencia = new \App\Models\Competencia();
        $competencia->nombre = 'nombreCompetencia1';
        $competencia->color = 'colorCompetencia1';
        $competencia->save();
    }
}
