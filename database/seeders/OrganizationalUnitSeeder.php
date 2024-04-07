<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parameter\OrganizationalUnit;

class OrganizationalUnitSeeder extends Seeder
{
    public function run()
    {
        OrganizationalUnit::create(array (
            'name' => 'Dirección',
            'level' => 1,
            'organizational_unit_id' => NULL,
            'establishment_id' => 38,
            'sirh_function' => NULL,
            'sirh_ou_id' => '1251000',
            'sirh_cost_center' => NULL,
            'deleted_at' => NULL,
        ));

        OrganizationalUnit::create(array (
            'name' => 'Subdirección de Gestión Asistencial',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
            'sirh_function' => NULL,
            'sirh_ou_id' => '1253000',
            'sirh_cost_center' => NULL,
            'deleted_at' => NULL,
        ));

        OrganizationalUnit::create(array (
            'name' => 'Subdirección de Recursos Físicos y Financieros',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
            'sirh_function' => NULL,
            'sirh_ou_id' => '1254000',
            'sirh_cost_center' => NULL,
            'deleted_at' => NULL,
        ));

        OrganizationalUnit::create(array (
            'name' => 'Subdirección de Gestión y Desarrollo de las Personas',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
            'sirh_function' => NULL,
            'sirh_ou_id' => '1252000',
            'sirh_cost_center' => NULL,
            'deleted_at' => NULL,
        ));
    }
}
