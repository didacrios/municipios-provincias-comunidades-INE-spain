<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComunidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Datos de Comunidades Autónomas de España
     * Fuente: http://www.ine.es/daco/daco42/codmun/cod_ccaa.htm
     * Fecha: 2013-02-01
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('comunidades')->insert([
            ['id_comunidad' => 1, 'nombre' => 'Andalucía'],
            ['id_comunidad' => 2, 'nombre' => 'Aragón'],
            ['id_comunidad' => 3, 'nombre' => 'Asturias, Principado de'],
            ['id_comunidad' => 4, 'nombre' => 'Balears, Illes'],
            ['id_comunidad' => 5, 'nombre' => 'Canarias'],
            ['id_comunidad' => 6, 'nombre' => 'Cantabria'],
            ['id_comunidad' => 7, 'nombre' => 'Castilla y León'],
            ['id_comunidad' => 8, 'nombre' => 'Castilla - La Mancha'],
            ['id_comunidad' => 9, 'nombre' => 'Catalunya'],
            ['id_comunidad' => 10, 'nombre' => 'Comunitat Valenciana'],
            ['id_comunidad' => 11, 'nombre' => 'Extremadura'],
            ['id_comunidad' => 12, 'nombre' => 'Galicia'],
            ['id_comunidad' => 13, 'nombre' => 'Madrid, Comunidad de'],
            ['id_comunidad' => 14, 'nombre' => 'Murcia, Región de'],
            ['id_comunidad' => 15, 'nombre' => 'Navarra, Comunidad Foral de'],
            ['id_comunidad' => 16, 'nombre' => 'País Vasco'],
            ['id_comunidad' => 17, 'nombre' => 'Rioja, La'],
            ['id_comunidad' => 18, 'nombre' => 'Ceuta'],
            ['id_comunidad' => 19, 'nombre' => 'Melilla'],
        ]);
    }
}
