<?php

use Illuminate\Database\Seeder;

class DirectorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ('directorios')->insert(
        [
            'nombre'    => 'Saul Mamani M',
            'direccion' => 'Plan 500,oruro',
            'telefono'  => 1234567


        ],
        [
            'nombre'    => 'Rosa rosa',
            'direccion' => 'Direccion 2 123',
            'telefono'  => 1234587


        ]
        
        )
    }
}
