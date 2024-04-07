<?php

namespace Database\Seeders;

use App\Models\Parameter\EstablishmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstablishmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstablishmentType::create(['name' => 'Centro Comunitario de Salud Familiar (CECOSF)']);
        EstablishmentType::create(['name' => 'Centro de Salud Familiar (CESFAM)']);
        EstablishmentType::create(['name' => 'CGR']);
        EstablishmentType::create(['name' => 'Centro Comunitario de Salud Mental  (COSAM)']);
        EstablishmentType::create(['name' => 'HOSPITAL']);
        EstablishmentType::create(['name' => 'Programa de Reparación y Atención Integral de Salud (PRAIS)']);
        EstablishmentType::create(['name' => 'Posta de Salud Rural (PSR)']);
        EstablishmentType::create(['name' => 'Servicio de Atención Primaria de Urgencia (SAPU)']);
        EstablishmentType::create(['name' => 'Dirección Servicio de Salud']);
        EstablishmentType::create(['name' => 'Centro de Salud Privado']);
        EstablishmentType::create(['name' => 'Clínica']);
        EstablishmentType::create(['name' => 'Centro de Diálisis']);
        EstablishmentType::create(['name' => 'Centro Médico y Dental']);
        EstablishmentType::create(['name' => 'Centros Exclusivos de Atención Respiratoria (CEAR)']);
        EstablishmentType::create(['name' => 'Clínica Dental']);
        EstablishmentType::create(['name' => 'Clínica Dental Móvil']);
        EstablishmentType::create(['name' => 'Dispositivo Incorporado por Crisis Sanitaria']);
        EstablishmentType::create(['name' => 'Laboratorio Clínico']);
        EstablishmentType::create(['name' => 'Puesto de Atención Médica Especializado (PAME) Incorporado por Crisis Sanitaria']);
        EstablishmentType::create(['name' => 'Servicio de Atención Primaria de Urgencia de Alta Resolutividad (SAR)']);
        EstablishmentType::create(['name' => 'Servicio de Urgencia Rural (SUR)']);
        EstablishmentType::create(['name' => 'Servicio Médico Legal']);
        EstablishmentType::create(['name' => 'Unidad de Salud Funcionarios']);
        EstablishmentType::create(['name' => 'Vacunatorio']);

    }
}
