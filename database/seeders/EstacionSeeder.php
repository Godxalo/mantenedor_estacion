<?php

namespace Database\Seeders;

use App\Models\Estacion;
use Illuminate\Database\Seeder;

class EstacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estacion=new Estacion();
        $estacion->establecimiento='950';
        $estacion->descripcion='DSSAS';
        $estacion->estado=0;
        $estacion->ip='192.10.10.1';
        $estacion->save();

        $estacion2=new Estacion();
        $estacion2->establecimiento='950';
        $estacion2->descripcion='Abastecimiento';
        $estacion2->estado=1;
        $estacion2->ip='192.10.10.2';
        $estacion2->save();
    }
}
