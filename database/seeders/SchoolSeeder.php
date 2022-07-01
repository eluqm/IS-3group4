<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '301',
            'name' => 'Administracion'],
            ['id' => '201',
            'name' => 'Agronomia'],
            ['id' => '302',
            'name' => 'Antropologia'],
            ['id' => '101',
            'name' => 'Arquitectura'],
            ['id' => '303',
            'name' => 'Artes'],
            ['id' => '304',
            'name' => 'Banca y Seguros'],
            ['id' => '202',
            'name' => 'Biologia'],
            ['id' => '102',
            'name' => 'Ciencias de la Computacion'],
            ['id' => '305',
            'name' => 'Ciencias de la Comunicacion'],
            ['id' => '203',
            'name' => 'Ciencias de la Nutricion'],
            ['id' => '306',
            'name' => 'Contabilidad'],
            ['id' => '307',
            'name' => 'Derecho'],
            ['id' => '308',
            'name' => 'Economia'],
            ['id' => '204',
            'name' => 'Enfermeria'],
            ['id' => '309',
            'name' => 'Educacion'],
            ['id' => '310',
            'name' => 'Filosofia'],
            ['id' => '311',
            'name' => 'Finanzas'],
            ['id' => '103',
            'name' => 'Fisica'],
            ['id' => '312',
            'name' => 'Gestion'],
            ['id' => '313',
            'name' => 'Historia'],
            ['id' => '104',
            'name' => 'Ingenieria Ambiental'],
            ['id' => '105',
            'name' => 'Ingenieria Civil'],
            ['id' => '106',
            'name' => 'Ingenieria de Industrias Alimentarias'],
            ['id' => '107',
            'name' => 'Ingenieria de Materiales'],
            ['id' => '108',
            'name' => 'Ingenieria de Minas'],
            ['id' => '109',
            'name' => 'Ingenieria de Sistemas'],
            ['id' => '110',
            'name' => 'Ingenieria de Telecomunicaciones'],
            ['id' => '111',
            'name' => 'Ingenieria Electrica'],
            ['id' => '112',
            'name' => 'Ingenieria Electronica'],
            ['id' => '113',
            'name' => 'Ingenieria Geofisica'],
            ['id' => '114',
            'name' => 'Ingenieria Geologica'],
            ['id' => '115',
            'name' => 'Ingenieria Industrial'],
            ['id' => '116',
            'name' => 'Ingenieria Mecanica'],
            ['id' => '117',
            'name' => 'Ingenieria Metalurgica'],
            ['id' => '205',
            'name' => 'Ingenieria Pesquera'],
            ['id' => '118',
            'name' => 'Ingenieria Quimica'],
            ['id' => '119',
            'name' => 'Ingenieria Sanitaria'],
            ['id' => '314',
            'name' => 'Literatura y Linguistica'],
            ['id' => '315',
            'name' => 'Marketing'],
            ['id' => '120',
            'name' => 'Matematicas'],
            ['id' => '206',
            'name' => 'Medicina'],
            ['id' => '316',
            'name' => 'Psicologia'],
            ['id' => '121',
            'name' => 'Quimica'],
            ['id' => '317',
            'name' => 'Relaciones Industriales'],
            ['id' => '318',
            'name' => 'Sociologia'],
            ['id' => '319',
            'name' => 'Trabajo Social'],
            ['id' => '320',
            'name' => 'Turismo y Hoteleria']
        ];

        DB::table('schools')->insert($data); 
    }
}