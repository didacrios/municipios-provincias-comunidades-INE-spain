<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * Datos de Provincias de España
     * Fuente: http://www.ine.es/daco/daco42/codmun/cod_provincia.htm
     * Fecha: 2013-02-01
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('provincias')->insert([
            ['provincia_id' => 1, 'comunidad_id' => 16, 'nom_provincia' => 'Araba/Álava'],
            ['provincia_id' => 2, 'comunidad_id' => 8, 'nom_provincia' => 'Albacete'],
            ['provincia_id' => 3, 'comunidad_id' => 10, 'nom_provincia' => 'Alicante/Alacant'],
            ['provincia_id' => 4, 'comunidad_id' => 1, 'nom_provincia' => 'Almería'],
            ['provincia_id' => 5, 'comunidad_id' => 7, 'nom_provincia' => 'Ávila'],
            ['provincia_id' => 6, 'comunidad_id' => 11, 'nom_provincia' => 'Badajoz'],
            ['provincia_id' => 7, 'comunidad_id' => 4, 'nom_provincia' => 'Balears, Illes'],
            ['provincia_id' => 8, 'comunidad_id' => 9, 'nom_provincia' => 'Barcelona'],
            ['provincia_id' => 9, 'comunidad_id' => 7, 'nom_provincia' => 'Burgos'],
            ['provincia_id' => 10, 'comunidad_id' => 11, 'nom_provincia' => 'Cáceres'],
            ['provincia_id' => 11, 'comunidad_id' => 1, 'nom_provincia' => 'Cádiz'],
            ['provincia_id' => 12, 'comunidad_id' => 10, 'nom_provincia' => 'Castellón/Castelló'],
            ['provincia_id' => 13, 'comunidad_id' => 8, 'nom_provincia' => 'Ciudad Real'],
            ['provincia_id' => 14, 'comunidad_id' => 1, 'nom_provincia' => 'Córdoba'],
            ['provincia_id' => 15, 'comunidad_id' => 12, 'nom_provincia' => 'Coruña, A'],
            ['provincia_id' => 16, 'comunidad_id' => 8, 'nom_provincia' => 'Cuenca'],
            ['provincia_id' => 17, 'comunidad_id' => 9, 'nom_provincia' => 'Girona'],
            ['provincia_id' => 18, 'comunidad_id' => 1, 'nom_provincia' => 'Granada'],
            ['provincia_id' => 19, 'comunidad_id' => 1, 'nom_provincia' => 'Guadalajara'],
            ['provincia_id' => 20, 'comunidad_id' => 16, 'nom_provincia' => 'Gipuzkoa'],
            ['provincia_id' => 21, 'comunidad_id' => 1, 'nom_provincia' => 'Huelva'],
            ['provincia_id' => 22, 'comunidad_id' => 2, 'nom_provincia' => 'Huesca'],
            ['provincia_id' => 23, 'comunidad_id' => 1, 'nom_provincia' => 'Jaén'],
            ['provincia_id' => 24, 'comunidad_id' => 7, 'nom_provincia' => 'León'],
            ['provincia_id' => 25, 'comunidad_id' => 9, 'nom_provincia' => 'Lleida'],
            ['provincia_id' => 26, 'comunidad_id' => 17, 'nom_provincia' => 'Rioja, La'],
            ['provincia_id' => 27, 'comunidad_id' => 12, 'nom_provincia' => 'Lugo'],
            ['provincia_id' => 28, 'comunidad_id' => 13, 'nom_provincia' => 'Madrid'],
            ['provincia_id' => 29, 'comunidad_id' => 1, 'nom_provincia' => 'Málaga'],
            ['provincia_id' => 30, 'comunidad_id' => 14, 'nom_provincia' => 'Murcia'],
            ['provincia_id' => 31, 'comunidad_id' => 15, 'nom_provincia' => 'Navarra'],
            ['provincia_id' => 32, 'comunidad_id' => 12, 'nom_provincia' => 'Ourense'],
            ['provincia_id' => 33, 'comunidad_id' => 3, 'nom_provincia' => 'Asturias'],
            ['provincia_id' => 34, 'comunidad_id' => 7, 'nom_provincia' => 'Palencia'],
            ['provincia_id' => 35, 'comunidad_id' => 5, 'nom_provincia' => 'Palmas, Las'],
            ['provincia_id' => 36, 'comunidad_id' => 12, 'nom_provincia' => 'Pontevedra'],
            ['provincia_id' => 37, 'comunidad_id' => 7, 'nom_provincia' => 'Salamanca'],
            ['provincia_id' => 38, 'comunidad_id' => 5, 'nom_provincia' => 'Santa Cruz de Tenerife'],
            ['provincia_id' => 39, 'comunidad_id' => 6, 'nom_provincia' => 'Cantabria'],
            ['provincia_id' => 40, 'comunidad_id' => 7, 'nom_provincia' => 'Segovia'],
            ['provincia_id' => 41, 'comunidad_id' => 1, 'nom_provincia' => 'Sevilla'],
            ['provincia_id' => 42, 'comunidad_id' => 7, 'nom_provincia' => 'Soria'],
            ['provincia_id' => 43, 'comunidad_id' => 9, 'nom_provincia' => 'Tarragona'],
            ['provincia_id' => 44, 'comunidad_id' => 2, 'nom_provincia' => 'Teruel'],
            ['provincia_id' => 45, 'comunidad_id' => 8, 'nom_provincia' => 'Toledo'],
            ['provincia_id' => 46, 'comunidad_id' => 10, 'nom_provincia' => 'Valencia/València'],
            ['provincia_id' => 47, 'comunidad_id' => 7, 'nom_provincia' => 'Valladolid'],
            ['provincia_id' => 48, 'comunidad_id' => 16, 'nom_provincia' => 'Bizkaia'],
            ['provincia_id' => 49, 'comunidad_id' => 7, 'nom_provincia' => 'Zamora'],
            ['provincia_id' => 50, 'comunidad_id' => 2, 'nom_provincia' => 'Zaragoza'],
            ['provincia_id' => 51, 'comunidad_id' => 18, 'nom_provincia' => 'Ceuta'],
            ['provincia_id' => 52, 'comunidad_id' => 19, 'nom_provincia' => 'Melilla'],
        ]);
    }
}
