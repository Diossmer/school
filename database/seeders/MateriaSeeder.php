<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert(['id'=>1, 'nombre'=>'Matematica', 'codigo_escolar'=>'2k5o4d2D']);
        DB::table('materias')->insert(['id'=>2, 'nombre'=>'Ingles', 'codigo_escolar'=>'2k5o64re']);
        DB::table('materias')->insert(['id'=>3, 'nombre'=>'Castellano', 'codigo_escolar'=>'2k5o5yrD']);
        DB::table('materias')->insert(['id'=>4, 'nombre'=>'Quimica', 'codigo_escolar'=>'2k5o356f']);
        DB::table('materias')->insert(['id'=>5, 'nombre'=>'Fisica', 'codigo_escolar'=>'2k5o4g5s']);
    }
}
