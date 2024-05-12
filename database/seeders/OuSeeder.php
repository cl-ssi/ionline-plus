<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Rrhh\OrganizationalUnit;

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
  'name' => 'Departamento de Red de Salud Mental',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253500',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Establecimientos y Dispositivos',
  'level' => 5,
  'organizational_unit_id' => 397,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-03-12 10:54:53',
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión de Recursos de Salud Mental',
  'level' => 4,
  'organizational_unit_id' => 3,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-12 11:14:58',
));
        OrganizationalUnit::create(array (
  'name' => 'Modelo de Gestión de Salud Mental',
  'level' => 4,
  'organizational_unit_id' => 3,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-12 11:17:34',
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Redes Hospitalarias',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253200',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidades de Gestión de Apoyo Clínico y Logístico',
  'level' => 4,
  'organizational_unit_id' => 7,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253201',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-02-28 13:56:08',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión de Demanda',
  'level' => 4,
  'organizational_unit_id' => 7,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253202',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Procesos Clínicos Integrados',
  'level' => 4,
  'organizational_unit_id' => 7,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253130',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión de Recursos e Inversiones',
  'level' => 4,
  'organizational_unit_id' => 7,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-15 08:06:08',
));
        OrganizationalUnit::create(array (
  'name' => 'Dirección de APS',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253700',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Modelo de Salud Familiar y Territorio',
  'level' => 3,
  'organizational_unit_id' => 12,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253620',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Planes y Programas',
  'level' => 4,
  'organizational_unit_id' => 12,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253720',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-03-19 13:02:35',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión de Recursos e Inversiones',
  'level' => 4,
  'organizational_unit_id' => 12,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-03-04 11:47:13',
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Red de Urgencias',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253240',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'S.A.M.U.',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => '1',
  'sirh_ou_id' => '1253310',
  'sirh_cost_center' => '1',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Establecimientos de Red de Urgencias',
  'level' => 4,
  'organizational_unit_id' => 16,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-02-23 10:05:42',
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Planificación y Control de Gestión',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251400',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Tecnologías de la Información y Comunicaciones',
  'level' => 3,
  'organizational_unit_id' => 31,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251600',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Epidemiología',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253520',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Estadísticas y Gestión de la Información',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251500',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Control de Gestión y Análisis de Datos',
  'level' => 4,
  'organizational_unit_id' => 62,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Consultorio General Urbano Dr. Hector Reyno',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-02-07 13:45:42',
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión Administrativa',
  'level' => 4,
  'organizational_unit_id' => 24,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Coordinador Médico',
  'level' => 4,
  'organizational_unit_id' => 24,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión Clínica',
  'level' => 4,
  'organizational_unit_id' => 24,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Oficina de Información, Reclamos y Sugerencias (O.I.R.S.)',
  'level' => 4,
  'organizational_unit_id' => 24,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'P.E.S.P.I.',
  'level' => 4,
  'organizational_unit_id' => 12,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253800',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-03-01 06:49:44',
));
        OrganizationalUnit::create(array (
  'name' => 'P.R.A.I.S.',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253900',
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
  'name' => 'Departamento de Gestión de Recursos Físicos e Inversiones de la Red',
  'level' => 3,
  'organizational_unit_id' => 31,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254310',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Planificación de Análisis y Control de Equipos y Equipamiento de la Red',
  'level' => 4,
  'organizational_unit_id' => 32,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254110',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Planificación de Análisis y Control de Infraestructura, Proyecto Inspección Técnica e Inversiones de la Red',
  'level' => 4,
  'organizational_unit_id' => 32,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254120',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión y Control de Procesos Administrativos de Inversiones',
  'level' => 4,
  'organizational_unit_id' => 32,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254130',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección de Inspección Técnicas de Obras',
  'level' => 4,
  'organizational_unit_id' => 32,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-15 07:28:59',
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Abastecimiento y Logística',
  'level' => 3,
  'organizational_unit_id' => 31,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254400',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Planificación de Ejecución y Control de Abastecimiento, obras, equipos y Equipamiento',
  'level' => 4,
  'organizational_unit_id' => 37,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254210',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Servicios Generales',
  'level' => 4,
  'organizational_unit_id' => 37,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254410',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Gestión Financiera',
  'level' => 3,
  'organizational_unit_id' => 31,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254300',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Planificación, análisis y control financiera y presupuestaria',
  'level' => 4,
  'organizational_unit_id' => 40,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Cobranzas',
  'level' => 4,
  'organizational_unit_id' => 40,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254340',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Contabilidad',
  'level' => 4,
  'organizational_unit_id' => 40,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254350',
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
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Gestión de Recursos Humanos',
  'level' => 3,
  'organizational_unit_id' => 44,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252300',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión de Personal y Ciclo de Vida laboral',
  'level' => 4,
  'organizational_unit_id' => 45,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252110',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Capacitación y Formación',
  'level' => 4,
  'organizational_unit_id' => 240,
  'establishment_id' => 38,
  'sirh_function' => '1',
  'sirh_ou_id' => '1252120',
  'sirh_cost_center' => '1',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Reclutamiento y Selección de Personas',
  'level' => 4,
  'organizational_unit_id' => 240,
  'establishment_id' => 38,
  'sirh_function' => '1',
  'sirh_ou_id' => '1252310',
  'sirh_cost_center' => '1',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Remuneraciones',
  'level' => 4,
  'organizational_unit_id' => 45,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252330',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Calidad de Vida Laboral',
  'level' => 3,
  'organizational_unit_id' => 44,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252500',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Bienestar',
  'level' => 4,
  'organizational_unit_id' => 50,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252210',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Apoyo Psicosocial',
  'level' => 4,
  'organizational_unit_id' => 50,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252530',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Clima Laboral',
  'level' => 4,
  'organizational_unit_id' => 50,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252230',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-02-23 10:05:01',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Salud del Trabajador',
  'level' => 4,
  'organizational_unit_id' => 50,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252240',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Seguridad, Salud Ocupacional y Gestión Ambiental',
  'level' => 3,
  'organizational_unit_id' => 44,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252600',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Prevención de Riesgos y Gestión Ambiental',
  'level' => 4,
  'organizational_unit_id' => 55,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252610',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Salud Ocupacional y Saludablemente',
  'level' => 4,
  'organizational_unit_id' => 55,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252620',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión Ambiental',
  'level' => 4,
  'organizational_unit_id' => 55,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252630',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-02-27 07:50:52',
));
        OrganizationalUnit::create(array (
  'name' => 'Planificación y Control de Gestión de Recursos Humanos',
  'level' => 3,
  'organizational_unit_id' => 44,
  'establishment_id' => 38,
  'sirh_function' => '1',
  'sirh_ou_id' => '1252020',
  'sirh_cost_center' => '1',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Auditoría Interna',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251100',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Asesoría Jurídica',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251200',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Planificación, Control de Gestión',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-15 05:56:31',
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Relaciones Públicas y Comunicaciones',
  'level' => 3,
  'organizational_unit_id' => 381,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251300',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-02-23 12:01:04',
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Participación Social, Gestión al usuario y Gobernanza',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251700',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Oficina de Partes',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251001',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión del Riesgo en Emergencia y Desastres',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251004',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Relacionadora Laboral',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Calidad y Seguridad del Paciente',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Relación Asistencial Docente R.A.D.',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251002',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Drogas',
  'level' => 3,
  'organizational_unit_id' => 61,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251210',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Droguería',
  'level' => 4,
  'organizational_unit_id' => 376,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253221',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Participación Social',
  'level' => 3,
  'organizational_unit_id' => 64,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión al Usuario',
  'level' => 3,
  'organizational_unit_id' => 64,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251701',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Oficina de Información Reclamos y Sugerencias (OIRS)',
  'level' => 4,
  'organizational_unit_id' => 73,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253602',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Puesta en Marcha Hospital Alto Hospicio',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251601',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-11-28 06:53:03',
));
        OrganizationalUnit::create(array (
  'name' => 'Externos',
  'level' => 1,
  'organizational_unit_id' => NULL,
  'establishment_id' => 9,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Alto Hospicio',
  'level' => 2,
  'organizational_unit_id' => 76,
  'establishment_id' => 9,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Camiña',
  'level' => 2,
  'organizational_unit_id' => 76,
  'establishment_id' => 9,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Iquique',
  'level' => 2,
  'organizational_unit_id' => 76,
  'establishment_id' => 9,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Pica',
  'level' => 2,
  'organizational_unit_id' => 76,
  'establishment_id' => 9,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Colchane',
  'level' => 2,
  'organizational_unit_id' => 76,
  'establishment_id' => 9,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Huara',
  'level' => 2,
  'organizational_unit_id' => 76,
  'establishment_id' => 9,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Pozo Almonte',
  'level' => 2,
  'organizational_unit_id' => 76,
  'establishment_id' => 9,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Dirección',
  'level' => 1,
  'organizational_unit_id' => NULL,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Subdirección de Gestión del Cuidado del Paciente',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1303000',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Subdirección de Gestión y Desarrollo de las Personas',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1305300',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Subdirección Administrativa',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304000',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Subdirección Médica',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301000',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Chile Crece Contigo',
  'level' => 3,
  'organizational_unit_id' => 85,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1303300',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad Quirurgico',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301600',
  'sirh_cost_center' => '000000003',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Esterilización',
  'level' => 3,
  'organizational_unit_id' => 85,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1303400',
  'sirh_cost_center' => '000000092',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad Urgencia y Paciente Crítico',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301420',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Desarrollo Organizacional',
  'level' => 3,
  'organizational_unit_id' => 86,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1305100',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad Médico',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301300',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Capacitación, Formación y Desarrollo de las Personas',
  'level' => 3,
  'organizational_unit_id' => 86,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1305200',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Gestión de las Personas',
  'level' => 3,
  'organizational_unit_id' => 86,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1305000',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad Salud Mental',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301700',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Reclutamiento y Selección de Personal',
  'level' => 4,
  'organizational_unit_id' => 93,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1305101',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Salud Ocupacional',
  'level' => 4,
  'organizational_unit_id' => 431,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1305102',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad Apoyo Clínico',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301310',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Calidad de Vida',
  'level' => 4,
  'organizational_unit_id' => 93,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1305103',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Remuneraciones',
  'level' => 4,
  'organizational_unit_id' => 96,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1305202',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección Contratos',
  'level' => 4,
  'organizational_unit_id' => 96,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '13050300',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad Odontología',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301800',
  'sirh_cost_center' => '000000043',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección Asistencia y Ausentismo',
  'level' => 4,
  'organizational_unit_id' => 96,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '13050300',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección Resoluciones',
  'level' => 4,
  'organizational_unit_id' => 96,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '13050300',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección Honorarios Suma Alzada',
  'level' => 4,
  'organizational_unit_id' => 96,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '13050300',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad Consultorio Adosado Especialidades (CAE)',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301500',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Operaciones',
  'level' => 3,
  'organizational_unit_id' => 87,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304100',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad Gestión de la Demanda',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301900',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Finanzas',
  'level' => 3,
  'organizational_unit_id' => 87,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304400',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Recursos Físicos y Abastecimiento',
  'level' => 3,
  'organizational_unit_id' => 87,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304300',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Pensionado',
  'level' => 3,
  'organizational_unit_id' => 87,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304500',
  'sirh_cost_center' => '000000001',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Neurocirugía',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301640',
  'sirh_cost_center' => '000000104',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Mantención',
  'level' => 4,
  'organizational_unit_id' => 109,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304102',
  'sirh_cost_center' => '000000098',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Cirugía',
  'level' => 4,
  'organizational_unit_id' => 90,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301620',
  'sirh_cost_center' => '000000034',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Traumatología',
  'level' => 4,
  'organizational_unit_id' => 90,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301503',
  'sirh_cost_center' => '000000039',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité Expertos Quirurgico',
  'level' => 4,
  'organizational_unit_id' => 90,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Servicios Generales',
  'level' => 4,
  'organizational_unit_id' => 109,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304103',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Lista de Espera',
  'level' => 4,
  'organizational_unit_id' => 90,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Lavandería y Textiles',
  'level' => 4,
  'organizational_unit_id' => 109,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304104',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Movilización',
  'level' => 4,
  'organizational_unit_id' => 109,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304105',
  'sirh_cost_center' => '000000091',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Prevención de Riesgos',
  'level' => 4,
  'organizational_unit_id' => 431,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304106',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Anestesia y Pabellones Quirúrgicos',
  'level' => 4,
  'organizational_unit_id' => 90,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301610',
  'sirh_cost_center' => '000000061',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Alimentación y Nutrición',
  'level' => 3,
  'organizational_unit_id' => 85,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304107',
  'sirh_cost_center' => '000000094',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Informática',
  'level' => 3,
  'organizational_unit_id' => 87,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1302108',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Contabilidad',
  'level' => 4,
  'organizational_unit_id' => 111,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304407',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Inventarios',
  'level' => 4,
  'organizational_unit_id' => 111,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304404',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección de Gestión Presupuestaria Ingresos',
  'level' => 5,
  'organizational_unit_id' => 127,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304408',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio Ginecología y Obstetricia',
  'level' => 4,
  'organizational_unit_id' => 90,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301650',
  'sirh_cost_center' => '000000041',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Recaudación y Cobranza',
  'level' => 4,
  'organizational_unit_id' => 111,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304406',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Mercado Público y Abastecimientos',
  'level' => 4,
  'organizational_unit_id' => 112,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304301',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio Unidad Paciente Crítico Pediatrico',
  'level' => 4,
  'organizational_unit_id' => 92,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301410',
  'sirh_cost_center' => '000000014',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Bodegas',
  'level' => 4,
  'organizational_unit_id' => 112,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304302',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Gestión Clínica',
  'level' => 4,
  'organizational_unit_id' => 113,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301000',
  'sirh_cost_center' => '000000001',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio Unidad Paciente Crítico Adulto',
  'level' => 4,
  'organizational_unit_id' => 92,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301420',
  'sirh_cost_center' => '000000015',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Gestión Administrativa',
  'level' => 4,
  'organizational_unit_id' => 113,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304502',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Emergencia Hospitalaria',
  'level' => 4,
  'organizational_unit_id' => 92,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301440',
  'sirh_cost_center' => '000000018',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Paciente Crítico de Neonatología',
  'level' => 5,
  'organizational_unit_id' => 183,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301430',
  'sirh_cost_center' => '000000013',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio Urgencia Ginecoobstetricia',
  'level' => 4,
  'organizational_unit_id' => 92,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301441',
  'sirh_cost_center' => '000000019',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Medicina',
  'level' => 4,
  'organizational_unit_id' => 94,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301310',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Pediatría',
  'level' => 4,
  'organizational_unit_id' => 94,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301320',
  'sirh_cost_center' => '000000040',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'UHCIP Adulto',
  'level' => 4,
  'organizational_unit_id' => 97,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301701',
  'sirh_cost_center' => '000000010',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Hospital de Día',
  'level' => 4,
  'organizational_unit_id' => 97,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301702',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'UHCE Infanto',
  'level' => 4,
  'organizational_unit_id' => 97,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301703',
  'sirh_cost_center' => '000000010',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Anatomía Patológica',
  'level' => 4,
  'organizational_unit_id' => 100,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301205',
  'sirh_cost_center' => '000000084',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Imagenología',
  'level' => 4,
  'organizational_unit_id' => 100,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301203',
  'sirh_cost_center' => '000000082',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Medicina Transfusional',
  'level' => 4,
  'organizational_unit_id' => 100,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301204',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Laboratorio Clínico',
  'level' => 4,
  'organizational_unit_id' => 100,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301202',
  'sirh_cost_center' => '000000078',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Farmacia',
  'level' => 4,
  'organizational_unit_id' => 100,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301201',
  'sirh_cost_center' => '000000090',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Dialisis',
  'level' => 4,
  'organizational_unit_id' => 100,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301311',
  'sirh_cost_center' => '000000087',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Odontopediatría',
  'level' => 4,
  'organizational_unit_id' => 104,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301801',
  'sirh_cost_center' => '000000069',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Imagenología Dental',
  'level' => 4,
  'organizational_unit_id' => 104,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301802',
  'sirh_cost_center' => '000000069',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Periodoncia',
  'level' => 4,
  'organizational_unit_id' => 104,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301803',
  'sirh_cost_center' => '000000069',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Endodoncia',
  'level' => 4,
  'organizational_unit_id' => 104,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301804',
  'sirh_cost_center' => '000000069',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Rehabilitación Oral',
  'level' => 4,
  'organizational_unit_id' => 104,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301805',
  'sirh_cost_center' => '000000069',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Ortodoncia',
  'level' => 4,
  'organizational_unit_id' => 104,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301806',
  'sirh_cost_center' => '000000069',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Maxilofacial Ambulatoria',
  'level' => 4,
  'organizational_unit_id' => 104,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301807',
  'sirh_cost_center' => '000000038',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Temporomandibular',
  'level' => 4,
  'organizational_unit_id' => 104,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301808',
  'sirh_cost_center' => '000000038',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Neurología Adulto',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301510',
  'sirh_cost_center' => '000000022',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Especialidades Quirurgicas',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301501',
  'sirh_cost_center' => '000000003',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Medicina Física y Rehabilitación',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301523',
  'sirh_cost_center' => '000000085',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Cardiología Adulto',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Neurología Pediátrica',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301524',
  'sirh_cost_center' => '000000022',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Reumatología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301527',
  'sirh_cost_center' => '000000023',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Tratamiento Anticoagulante',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301514',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Dermatología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301516',
  'sirh_cost_center' => '000000025',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Oftalmología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301515',
  'sirh_cost_center' => '000000036',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Otorrinolaringología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301502',
  'sirh_cost_center' => '000000037',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Oncología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301517',
  'sirh_cost_center' => '000000026',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Endocrinología Adulto',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301508',
  'sirh_cost_center' => '000000028',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Infectología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301506',
  'sirh_cost_center' => '000000030',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Alto Riesgo Obstétrico',
  'level' => 5,
  'organizational_unit_id' => 177,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301521',
  'sirh_cost_center' => '000000006',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Gastroenterología Adultos',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301518',
  'sirh_cost_center' => '000000066',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Diabetología y Nutrición',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301509',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Traumatología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301630',
  'sirh_cost_center' => '000000039',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Ginecología y Obstreticia',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301522',
  'sirh_cost_center' => '000000041',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Piso Pélvico',
  'level' => 5,
  'organizational_unit_id' => 177,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => '000000041',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Adulto Mayor y Geriatría',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301526',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Nefrología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301511',
  'sirh_cost_center' => '000000102',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Pediatría',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301320',
  'sirh_cost_center' => '000000040',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Alivio del Dolor y Cuidados Paliativos',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301512',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio Neonatología',
  'level' => 4,
  'organizational_unit_id' => 92,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301520',
  'sirh_cost_center' => '000000017',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Broncopulmonar Adultos',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301507',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Patología Cervical',
  'level' => 5,
  'organizational_unit_id' => 177,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Hematología Adulto',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301504',
  'sirh_cost_center' => '000000101',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Medicina Interna',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301505',
  'sirh_cost_center' => '000000021',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Transplante y Procuramiento',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301525',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Registro y Control Lista de Espera',
  'level' => 4,
  'organizational_unit_id' => 110,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301901',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión en Red (Ex S.O.M.E)',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301902',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Prequirurgica',
  'level' => 3,
  'organizational_unit_id' => 85,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301903',
  'sirh_cost_center' => '000000003',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Hospitalización Domiciliaria',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301904',
  'sirh_cost_center' => '000000011',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Gestión y Control de la Información',
  'level' => 4,
  'organizational_unit_id' => 110,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión de Camas',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301905',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Cirugía Infantil',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301621',
  'sirh_cost_center' => '000000034',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Cirugía Mayor Ambulatoria',
  'level' => 5,
  'organizational_unit_id' => 459,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301622',
  'sirh_cost_center' => '000000034',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Cirugía Cabeza y Cuello',
  'level' => 5,
  'organizational_unit_id' => 443,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301624',
  'sirh_cost_center' => '000000034',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Cirugía Máxilo Facial',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301651',
  'sirh_cost_center' => '000000038',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Urología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301623',
  'sirh_cost_center' => '000000035',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Otorrinolaringología',
  'level' => 5,
  'organizational_unit_id' => 116,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301625',
  'sirh_cost_center' => '000000037',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Cirugía Bariátrica',
  'level' => 5,
  'organizational_unit_id' => 116,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301652',
  'sirh_cost_center' => '000000034',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Oftalmología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301653',
  'sirh_cost_center' => '000000036',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Pabellón Central',
  'level' => 5,
  'organizational_unit_id' => 124,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301611',
  'sirh_cost_center' => '000000061',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Pabellón Cirugía Menor',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301613',
  'sirh_cost_center' => '000000061',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Pabellón Ginecología y Obstetricia',
  'level' => 5,
  'organizational_unit_id' => 124,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301612',
  'sirh_cost_center' => '000000048',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Alto Riesgo Obstétrico',
  'level' => 5,
  'organizational_unit_id' => 130,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301654',
  'sirh_cost_center' => '000000007',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Ginecología General',
  'level' => 5,
  'organizational_unit_id' => 177,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301655',
  'sirh_cost_center' => '000000041',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Puerperio Normal y Quirurgico',
  'level' => 5,
  'organizational_unit_id' => 130,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301656',
  'sirh_cost_center' => '000000007',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Ecografía Gineco-Obstetrica',
  'level' => 5,
  'organizational_unit_id' => 130,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301657',
  'sirh_cost_center' => '000000007',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Piso Pélvico',
  'level' => 5,
  'organizational_unit_id' => 130,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301658',
  'sirh_cost_center' => '000000007',
  'deleted_at' => '2024-01-14 21:04:41',
));
        OrganizationalUnit::create(array (
  'name' => 'Medio Privativo',
  'level' => 5,
  'organizational_unit_id' => 145,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301704',
  'sirh_cost_center' => '000000010',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Consultas de Especialidad',
  'level' => 5,
  'organizational_unit_id' => 189,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Tiempos de Espera Quirurgicos',
  'level' => 5,
  'organizational_unit_id' => 189,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'GES/PPV',
  'level' => 5,
  'organizational_unit_id' => 189,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301920',
  'sirh_cost_center' => '000000002',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección Admisión',
  'level' => 5,
  'organizational_unit_id' => 190,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301930',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección Referencia y Contrarreferencia',
  'level' => 5,
  'organizational_unit_id' => 190,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301940',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección Traslado Ambulatorio',
  'level' => 5,
  'organizational_unit_id' => 190,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301950',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección de Administración de Agenda',
  'level' => 5,
  'organizational_unit_id' => 190,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección de Archivo',
  'level' => 5,
  'organizational_unit_id' => 190,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301970',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección de Contactabilidad',
  'level' => 5,
  'organizational_unit_id' => 190,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301980',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Análisis de Registros Clínicos (GRD)',
  'level' => 3,
  'organizational_unit_id' => 417,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Asesor de Gabinete',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-02-05 09:55:32',
));
        OrganizationalUnit::create(array (
  'name' => 'Extensión Hospital -Estadio',
  'level' => 5,
  'organizational_unit_id' => 141,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1253000',
  'sirh_cost_center' => '000000018',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección Administrativa Honorarios Covid',
  'level' => 5,
  'organizational_unit_id' => 107,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304502',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'UHCIP Infanto Adolescente',
  'level' => 4,
  'organizational_unit_id' => 97,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1301703',
  'sirh_cost_center' => '000000010',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Oficina de Calidad y Seguridad del Paciente',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1300205',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Oficina Programa Control de Infecciones Asociadas Atención de Salud',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => '9082',
  'sirh_ou_id' => '1300206',
  'sirh_cost_center' => '000000030',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Cosam Dr. Jorge Seguel',
  'level' => 5,
  'organizational_unit_id' => 498,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Cosam Salvador Allende',
  'level' => 5,
  'organizational_unit_id' => 498,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Cosam Dr. Enrique París',
  'level' => 5,
  'organizational_unit_id' => 498,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Asesoría Jurídica',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1300201',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Gestión al Usuario',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1300207',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Estadística y Gestión de Información (Ex DAIS)',
  'level' => 3,
  'organizational_unit_id' => 417,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1301906',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sala Cuna y Jardín Capullito',
  'level' => 3,
  'organizational_unit_id' => 86,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1305001',
  'sirh_cost_center' => '000000099',
  'deleted_at' => '2023-06-16 07:49:41',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Proyectos',
  'level' => 3,
  'organizational_unit_id' => 87,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Docencia e Investigación',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1300203',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'U.E',
  'level' => 4,
  'organizational_unit_id' => 20,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-02-01 06:41:59',
));
        OrganizationalUnit::create(array (
  'name' => 'Inventario',
  'level' => 5,
  'organizational_unit_id' => 43,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-19 11:51:53',
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Gestión y Desarrollo del Talento',
  'level' => 3,
  'organizational_unit_id' => 44,
  'establishment_id' => 38,
  'sirh_function' => '1',
  'sirh_ou_id' => '1252400',
  'sirh_cost_center' => '1',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Subdirección de Planificación y Control Hospitalario',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Cuidados Infantiles',
  'level' => 4,
  'organizational_unit_id' => 50,
  'establishment_id' => 38,
  'sirh_function' => '1',
  'sirh_ou_id' => '1252540',
  'sirh_cost_center' => '1',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Cosam Jorge Seguel',
  'level' => 5,
  'organizational_unit_id' => 4,
  'establishment_id' => 38,
  'sirh_function' => '1',
  'sirh_ou_id' => '1',
  'sirh_cost_center' => '1',
  'deleted_at' => '2023-02-02 05:39:02',
));
        OrganizationalUnit::create(array (
  'name' => 'Cosam Salvador Allende',
  'level' => 5,
  'organizational_unit_id' => 4,
  'establishment_id' => 38,
  'sirh_function' => '1',
  'sirh_ou_id' => '1',
  'sirh_cost_center' => '1',
  'deleted_at' => '2023-02-02 05:39:08',
));
        OrganizationalUnit::create(array (
  'name' => 'Cosam Enrique Paris',
  'level' => 5,
  'organizational_unit_id' => 4,
  'establishment_id' => 38,
  'sirh_function' => '1',
  'sirh_ou_id' => '1',
  'sirh_cost_center' => '1',
  'deleted_at' => '2023-02-02 05:39:15',
));
        OrganizationalUnit::create(array (
  'name' => 'Dirección',
  'level' => 1,
  'organizational_unit_id' => NULL,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Subdirección Gestión Asistencial',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión Clínica',
  'level' => 3,
  'organizational_unit_id' => 247,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión de Cama',
  'level' => 4,
  'organizational_unit_id' => 248,
  'establishment_id' => 41,
  'sirh_function' => '1',
  'sirh_ou_id' => '1',
  'sirh_cost_center' => '1',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'DESARROLLO DE PROCESO DE MATRONERIA',
  'level' => 3,
  'organizational_unit_id' => 247,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-17 08:57:22',
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión de la Demanda',
  'level' => 3,
  'organizational_unit_id' => 247,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Bioestadística',
  'level' => 4,
  'organizational_unit_id' => 251,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Archivo',
  'level' => 4,
  'organizational_unit_id' => 251,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Lista de Espera',
  'level' => 4,
  'organizational_unit_id' => 251,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Garantía Explicita en Salud (GES)',
  'level' => 4,
  'organizational_unit_id' => 251,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Contactabilidad',
  'level' => 4,
  'organizational_unit_id' => 251,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Desarrollo de Procesos de Matronería',
  'level' => 3,
  'organizational_unit_id' => 247,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Traslado',
  'level' => 4,
  'organizational_unit_id' => 251,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Proceso Prequirúrgico',
  'level' => 4,
  'organizational_unit_id' => 251,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Secretaria',
  'level' => 4,
  'organizational_unit_id' => 251,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-18 07:18:38',
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad de Atención Abierta',
  'level' => 3,
  'organizational_unit_id' => 247,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Consultas',
  'level' => 4,
  'organizational_unit_id' => 261,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Dental',
  'level' => 4,
  'organizational_unit_id' => 261,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Diálisis',
  'level' => 4,
  'organizational_unit_id' => 261,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Hospital de Día',
  'level' => 4,
  'organizational_unit_id' => 261,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Procedimientos',
  'level' => 4,
  'organizational_unit_id' => 261,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad e Atención Cerrada',
  'level' => 3,
  'organizational_unit_id' => 247,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Tratamiento Intensivo',
  'level' => 4,
  'organizational_unit_id' => 267,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Médico Quirúrgico Adulto',
  'level' => 4,
  'organizational_unit_id' => 267,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Médico Quirúrgico Pediátrico',
  'level' => 4,
  'organizational_unit_id' => 267,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gineco-Obstétrico',
  'level' => 4,
  'organizational_unit_id' => 267,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Hospitalizacion de cuidados Intermedios en Psiquiatria',
  'level' => 4,
  'organizational_unit_id' => 267,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => '(UHCIP)-Enlace Psiquiatría',
  'level' => 4,
  'organizational_unit_id' => 267,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Relacionador Laboral',
  'level' => 3,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-17 10:08:15',
));
        OrganizationalUnit::create(array (
  'name' => 'Hospitalización Domiciliaria',
  'level' => 4,
  'organizational_unit_id' => 267,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Pensionado',
  'level' => 4,
  'organizational_unit_id' => 267,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad de Proceso Quirúrgico',
  'level' => 3,
  'organizational_unit_id' => 247,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unida Cirugía Mayor Ambulatoria',
  'level' => 4,
  'organizational_unit_id' => 277,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Pabellón',
  'level' => 4,
  'organizational_unit_id' => 277,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sala de Parto Integral',
  'level' => 4,
  'organizational_unit_id' => 277,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad de Urgencia',
  'level' => 3,
  'organizational_unit_id' => 247,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Emergencia Hospitalaria',
  'level' => 4,
  'organizational_unit_id' => 281,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro de Responsabilidad de Apoyo Diagnóstico',
  'level' => 3,
  'organizational_unit_id' => 247,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Farmacia',
  'level' => 4,
  'organizational_unit_id' => 283,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Imageneología',
  'level' => 4,
  'organizational_unit_id' => 283,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Laboratorio- Unidad de Medicina Transfusional (UMT)',
  'level' => 4,
  'organizational_unit_id' => 283,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Anatomía Patológica',
  'level' => 4,
  'organizational_unit_id' => 283,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Medicina Física y Rehabilitación',
  'level' => 4,
  'organizational_unit_id' => 283,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Alimentación y Servicio Dietético de Leche (SEDILE)',
  'level' => 4,
  'organizational_unit_id' => 283,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Juridica',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Auditoria Interna',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Relaciones Laborales',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Tecnologías de la Información',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Red Asistencial Docente',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Coordinadora Red Asistencial (UCRA)',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Calidad y Seguridad del Paciente',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Epidemiología',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-17 10:14:12',
));
        OrganizationalUnit::create(array (
  'name' => 'Infecciones Asociadas  a la Atención  en Salud (IAAS)',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-17 10:18:29',
));
        OrganizationalUnit::create(array (
  'name' => 'Comunicación y Satisfacción Usuaria',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'OIRS- Participación Social',
  'level' => 3,
  'organizational_unit_id' => 299,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Epidemiología',
  'level' => 3,
  'organizational_unit_id' => 296,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Infecciones Asociadas a la Atención en Salud (IAAS)',
  'level' => 3,
  'organizational_unit_id' => 296,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Relaciones Públicas- Comunicaciones',
  'level' => 3,
  'organizational_unit_id' => 299,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-03-15 12:54:24',
));
        OrganizationalUnit::create(array (
  'name' => 'Orientación al Usuario y Gestión Social',
  'level' => 3,
  'organizational_unit_id' => 299,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Proyectos Hospitalarios',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Planificación y control de Gestión',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Grupo Relacionado a Diagnostico (GRD)',
  'level' => 3,
  'organizational_unit_id' => 306,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Oficina de Partes y Secretaria',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Subdirección Gestión del Cuidado',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Secretaria',
  'level' => 3,
  'organizational_unit_id' => 309,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-18 07:19:15',
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión de Cuidado de Atención Abierta',
  'level' => 3,
  'organizational_unit_id' => 309,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Consultas',
  'level' => 4,
  'organizational_unit_id' => 311,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Dental',
  'level' => 4,
  'organizational_unit_id' => 311,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Diálisis',
  'level' => 4,
  'organizational_unit_id' => 311,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Hospital de Día',
  'level' => 4,
  'organizational_unit_id' => 311,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Procedimientos',
  'level' => 4,
  'organizational_unit_id' => 311,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión del Cuidado de Atención Cerrada',
  'level' => 3,
  'organizational_unit_id' => 309,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Tratamiento Intensivo',
  'level' => 4,
  'organizational_unit_id' => 317,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Medico Qx. Adulto Camas Basicas',
  'level' => 4,
  'organizational_unit_id' => 317,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Médico Quirúrgico Pediátrico',
  'level' => 4,
  'organizational_unit_id' => 317,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Hospitalizacion de cuidados Intermedios en Psiquiatria',
  'level' => 4,
  'organizational_unit_id' => 317,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => '(UHCIP)-Enlace Psiquiatría',
  'level' => 4,
  'organizational_unit_id' => 317,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Hospitalizacion Domiciliaria',
  'level' => 4,
  'organizational_unit_id' => 317,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Pensionado',
  'level' => 4,
  'organizational_unit_id' => 317,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión del Cuidado de Proceso Quirúrgico',
  'level' => 3,
  'organizational_unit_id' => 309,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Pabellon - Anestesia',
  'level' => 4,
  'organizational_unit_id' => 325,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Cirugia Mayor Ambulatoria',
  'level' => 4,
  'organizational_unit_id' => 325,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Esterilización',
  'level' => 4,
  'organizational_unit_id' => 325,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión del Cuidado de Urgencia',
  'level' => 3,
  'organizational_unit_id' => 309,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Emergencia Hospitalaria',
  'level' => 4,
  'organizational_unit_id' => 329,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Subdirección de Gestión Administrativa',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Secretaria',
  'level' => 3,
  'organizational_unit_id' => 331,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-18 07:21:15',
));
        OrganizationalUnit::create(array (
  'name' => 'Control Interno y Análisis Financiero',
  'level' => 3,
  'organizational_unit_id' => 331,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Abastecimiento',
  'level' => 3,
  'organizational_unit_id' => 331,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Adquisiciones',
  'level' => 4,
  'organizational_unit_id' => 334,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Administración de Contratos',
  'level' => 4,
  'organizational_unit_id' => 334,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Finanzas',
  'level' => 3,
  'organizational_unit_id' => 331,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Contabilidad y Activo Fijo',
  'level' => 4,
  'organizational_unit_id' => 337,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Control presupuestario',
  'level' => 5,
  'organizational_unit_id' => 338,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Recaudacion',
  'level' => 4,
  'organizational_unit_id' => 337,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Cobranza',
  'level' => 5,
  'organizational_unit_id' => 340,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Tesorería',
  'level' => 4,
  'organizational_unit_id' => 337,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Logística y Distribución',
  'level' => 3,
  'organizational_unit_id' => 331,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Bodega General',
  'level' => 4,
  'organizational_unit_id' => 343,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Bodega de Medicamentos',
  'level' => 4,
  'organizational_unit_id' => 343,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Distribución Interna',
  'level' => 4,
  'organizational_unit_id' => 343,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Subdireccion de Gestión Operacional',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Secretaria',
  'level' => 3,
  'organizational_unit_id' => 347,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-18 07:22:01',
));
        OrganizationalUnit::create(array (
  'name' => 'Soporte',
  'level' => 3,
  'organizational_unit_id' => 347,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión Ambiental',
  'level' => 3,
  'organizational_unit_id' => 347,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Control Centralizado, Electricidad y Corrientes Débiles',
  'level' => 3,
  'organizational_unit_id' => 347,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicios Generales',
  'level' => 3,
  'organizational_unit_id' => 347,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Equipos Médicos',
  'level' => 3,
  'organizational_unit_id' => 347,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Mantenimiento de Infraestructura',
  'level' => 3,
  'organizational_unit_id' => 347,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Lavandería',
  'level' => 3,
  'organizational_unit_id' => 347,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Movilización',
  'level' => 3,
  'organizational_unit_id' => 347,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Subdirección de Gestión y Desarrollo de las Personas',
  'level' => 2,
  'organizational_unit_id' => 246,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Secretaria',
  'level' => 3,
  'organizational_unit_id' => 357,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-18 07:19:45',
));
        OrganizationalUnit::create(array (
  'name' => 'Control y planificación  del Recurso Humano',
  'level' => 3,
  'organizational_unit_id' => 357,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-01-17 12:50:39',
));
        OrganizationalUnit::create(array (
  'name' => 'Control y planificación del Recurso Humano',
  'level' => 3,
  'organizational_unit_id' => 357,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Desarrollo y Gestión del Talento',
  'level' => 3,
  'organizational_unit_id' => 357,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Reclutamiento y Selección',
  'level' => 4,
  'organizational_unit_id' => 361,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Capacitación y Formación',
  'level' => 4,
  'organizational_unit_id' => 361,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión de las Personas',
  'level' => 3,
  'organizational_unit_id' => 357,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Personal',
  'level' => 4,
  'organizational_unit_id' => 364,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Remuneraciones',
  'level' => 4,
  'organizational_unit_id' => 364,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Calidad de Vida',
  'level' => 3,
  'organizational_unit_id' => 357,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Bienestar',
  'level' => 4,
  'organizational_unit_id' => 367,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Salud Ocupacional y Salud del Funcionario',
  'level' => 4,
  'organizational_unit_id' => 367,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sala Cuna',
  'level' => 4,
  'organizational_unit_id' => 367,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Climatización',
  'level' => 3,
  'organizational_unit_id' => 347,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Consultas',
  'level' => 5,
  'organizational_unit_id' => 254,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-02-01 06:42:49',
));
        OrganizationalUnit::create(array (
  'name' => 'RRPP y COMUNICACIONES',
  'level' => 3,
  'organizational_unit_id' => 299,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Dispositivos Residenciales de Salud',
  'level' => 4,
  'organizational_unit_id' => 3,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253230',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Odontología',
  'level' => 4,
  'organizational_unit_id' => 375,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Gestión Farmacéutica',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253220',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Gestión Odontológica',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253227',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección de Gestión Presupuestaria Gastos',
  'level' => 5,
  'organizational_unit_id' => 127,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304408',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección de Tesorería',
  'level' => 5,
  'organizational_unit_id' => 127,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304408',
  'sirh_cost_center' => '000000099',
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Análisis Financiero y Contable',
  'level' => 4,
  'organizational_unit_id' => 111,
  'establishment_id' => 1,
  'sirh_function' => '9083',
  'sirh_ou_id' => '1304408',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Gabinete',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251900',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-02-23 12:37:40',
));
        OrganizationalUnit::create(array (
  'name' => 'Género',
  'level' => 3,
  'organizational_unit_id' => 487,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1251006',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Integración Digital',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253225',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Coordinación Territorial',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253226',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-02-23 10:02:11',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Salud Digital',
  'level' => 4,
  'organizational_unit_id' => 383,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253228',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión Administrativa y Financiera',
  'level' => 4,
  'organizational_unit_id' => 374,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253630',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-02-23 10:03:19',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Coordinación en Red',
  'level' => 4,
  'organizational_unit_id' => 374,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253631',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-02-23 10:02:57',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión de Recursos Humanos',
  'level' => 4,
  'organizational_unit_id' => 374,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-02-23 10:03:54',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Planificación de Análisis y Control de Equipos y Equipamiento de la Red',
  'level' => 4,
  'organizational_unit_id' => 32,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-06 20:20:07',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Planificación de Análisis y Control de Infraestructura, Proyecto, Inspección Técnica e Inversiones de la Red',
  'level' => 4,
  'organizational_unit_id' => 32,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-06 20:20:09',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión y Control de Procesos Administrativos de Inversiones',
  'level' => 4,
  'organizational_unit_id' => 32,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-06 20:22:54',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Control de Mantenimiento de la Red',
  'level' => 4,
  'organizational_unit_id' => 32,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1254140',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Fiscalía',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1252640',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'IAAS',
  'level' => 4,
  'organizational_unit_id' => 68,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Calidad',
  'level' => 4,
  'organizational_unit_id' => 68,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253229',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Farmacia Asistencial',
  'level' => 4,
  'organizational_unit_id' => 376,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253222',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión de Modelo de Atención y Procesos Clínicos',
  'level' => 4,
  'organizational_unit_id' => 3,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión Administrativa y Organizacional',
  'level' => 4,
  'organizational_unit_id' => 3,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253610',
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento Gestión de Proyectos',
  'level' => 3,
  'organizational_unit_id' => 31,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Planes y Programas',
  'level' => 4,
  'organizational_unit_id' => 3,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => '1253720',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-04-10 13:19:51',
));
        OrganizationalUnit::create(array (
  'name' => 'Comunicaciones',
  'level' => 3,
  'organizational_unit_id' => 487,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Secretaría',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión Documental',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Oficina de Partes',
  'level' => 3,
  'organizational_unit_id' => 403,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Auditoría Interna',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Relaciones Laborales',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Epidemiología',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Comunicaciones y Relaciones Públicas',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Oficina de Información, Reclamos y Sugerencias (OIRS)',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Sección de Control de Facturas, Intermediación y Programas Ministeriales',
  'level' => 5,
  'organizational_unit_id' => 134,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'COSAM Enrique Paris',
  'level' => 6,
  'organizational_unit_id' => 4,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-20 07:33:16',
));
        OrganizationalUnit::create(array (
  'name' => 'COSAM Salvador Allende',
  'level' => 6,
  'organizational_unit_id' => 4,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-20 07:31:35',
));
        OrganizationalUnit::create(array (
  'name' => 'COSAM Jorge Seguel',
  'level' => 6,
  'organizational_unit_id' => 4,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-20 07:34:23',
));
        OrganizationalUnit::create(array (
  'name' => 'Hospital Diurno Adolescente',
  'level' => 6,
  'organizational_unit_id' => 4,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-27 13:14:59',
));
        OrganizationalUnit::create(array (
  'name' => 'UHCIP M. Privativo',
  'level' => 6,
  'organizational_unit_id' => 4,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-27 13:01:43',
));
        OrganizationalUnit::create(array (
  'name' => 'Centro Diurno Casa Club',
  'level' => 6,
  'organizational_unit_id' => 4,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-27 12:53:11',
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Coordinación de Eficiencia Hospitalaria',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Garantía Explícita de Sakud (GES)',
  'level' => 3,
  'organizational_unit_id' => 241,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-16 07:55:09',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Garantía Explícita de Salud (GES)',
  'level' => 4,
  'organizational_unit_id' => 417,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad No Ges Lista Espera Consulta',
  'level' => 4,
  'organizational_unit_id' => 417,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Lista Espera Quirúrgica',
  'level' => 4,
  'organizational_unit_id' => 417,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Control de Gestión Hospitalaria',
  'level' => 3,
  'organizational_unit_id' => 417,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión de Costos (SIGCOM)',
  'level' => 3,
  'organizational_unit_id' => 417,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Asesora de Planificación y Control de Gestión de las Personas',
  'level' => 3,
  'organizational_unit_id' => 86,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'DEPARTAMENTO DESARROLLO ORGANIZACIONAL',
  'level' => 3,
  'organizational_unit_id' => 86,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2023-06-16 09:22:53',
));
        OrganizationalUnit::create(array (
  'name' => 'Coordinadora de Enfermería',
  'level' => 3,
  'organizational_unit_id' => 85,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro Diurno',
  'level' => 5,
  'organizational_unit_id' => 498,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Infanto Adolescente Medio Privativo Libertad (UHCIP)',
  'level' => 5,
  'organizational_unit_id' => 397,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Hospital de Día Infanto Adolescente',
  'level' => 5,
  'organizational_unit_id' => 498,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Dirección',
  'level' => 1,
  'organizational_unit_id' => NULL,
  'establishment_id' => 53,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Salud Ocupacional, Prevención de Riesgos y Gestión Ambiental',
  'level' => 3,
  'organizational_unit_id' => 86,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión Ambiental y Residuos de Establecimientos Asistenciales de Salud (REAS)',
  'level' => 4,
  'organizational_unit_id' => 431,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión de Contrato',
  'level' => 3,
  'organizational_unit_id' => 87,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Coordinación de Cuidados de la Matronería',
  'level' => 3,
  'organizational_unit_id' => 88,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Emergencia Adulto',
  'level' => 5,
  'organizational_unit_id' => 138,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Emergencia Pediátrica',
  'level' => 5,
  'organizational_unit_id' => 138,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Hospitalización en Cuidados Intensivos de Psiquiatría "UHCIP" Adulto',
  'level' => 4,
  'organizational_unit_id' => 97,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-01-14 18:37:52',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Hospitalización en Cuidados Intensivos de Psiquiatría "UHCIP" Infanto adolescente',
  'level' => 4,
  'organizational_unit_id' => 97,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-01-14 18:35:44',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Hemodinamía',
  'level' => 5,
  'organizational_unit_id' => 147,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Implantología',
  'level' => 4,
  'organizational_unit_id' => 104,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Atención y Control Enfermedades Salud Sexual (UNACESS)',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Programa VIH',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Cirugía Adulto',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Cirugía Digestiva Alta',
  'level' => 5,
  'organizational_unit_id' => 443,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Cirugía Vascular Periférica',
  'level' => 5,
  'organizational_unit_id' => 443,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Coloproctología',
  'level' => 5,
  'organizational_unit_id' => 443,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Endoscopía',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Fertilidad',
  'level' => 5,
  'organizational_unit_id' => 177,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Patologia Mamaría',
  'level' => 5,
  'organizational_unit_id' => 177,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de la Memoría',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Broncopulmonar Pediátrica',
  'level' => 5,
  'organizational_unit_id' => 181,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Endocrinología Pediátrica',
  'level' => 5,
  'organizational_unit_id' => 181,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gastroenterología Pediátrica',
  'level' => 5,
  'organizational_unit_id' => 181,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Hemato-Oncología Pediátrica',
  'level' => 5,
  'organizational_unit_id' => 181,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Cardiología Infantil',
  'level' => 5,
  'organizational_unit_id' => 181,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad NANEAS',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Gestión en Red (Ex S.O.M.E.)',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-01-10 12:16:32',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Pabellón Maternidad',
  'level' => 5,
  'organizational_unit_id' => 124,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Cirugía Adulto y Especialidades',
  'level' => 4,
  'organizational_unit_id' => 90,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Neurocirugía',
  'level' => 4,
  'organizational_unit_id' => 90,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Servicio de Ginecología Obstetricia',
  'level' => 4,
  'organizational_unit_id' => 90,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Subsistema de Protección Social Programa "Chilecrece Contigo" del Ministerio de Desarrollo Social y Familia',
  'level' => 4,
  'organizational_unit_id' => 426,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-01-14 19:45:24',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Subsistema de Protección Social Programa "Chilecrece Contigo" del Ministerio de Desarrollo Social y Familia',
  'level' => 4,
  'organizational_unit_id' => 426,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-01-11 05:56:45',
));
        OrganizationalUnit::create(array (
  'name' => 'Oficina Programa RNAO',
  'level' => 3,
  'organizational_unit_id' => 85,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Médico Auditor Clínico Hospital',
  'level' => 3,
  'organizational_unit_id' => 405,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Fiscalía Interna',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Neonatología',
  'level' => 4,
  'organizational_unit_id' => 108,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Consejo Consultivo',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Capacitación',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Ética Asistencial',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Farmacia',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Compras',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité Directivo',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Alimentación',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Buen Trato Laboral',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Seguridad Local',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité Paritario de Higiene y Seguridad',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Ausentismo',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de PEMEL Local',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Asignación de Turno',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Género',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité CEAL-SM',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité de Movilidad Interna',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Comité Técnico Asesor de la Dirección',
  'level' => 2,
  'organizational_unit_id' => 84,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Ginecología',
  'level' => 5,
  'organizational_unit_id' => 130,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Cirugía Infantil',
  'level' => 5,
  'organizational_unit_id' => 142,
  'establishment_id' => 1,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Relaciones Institucionales',
  'level' => 2,
  'organizational_unit_id' => 1,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Gestión de Servicios Clínicos de Apoyo y Logísticos',
  'level' => 4,
  'organizational_unit_id' => 7,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión Clínica en el Curso de la Vida',
  'level' => 3,
  'organizational_unit_id' => 12,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Gestión Administrativa en Atención Primaria de Salud',
  'level' => 3,
  'organizational_unit_id' => 12,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Urgencia y Gestión de Emergencias y Desastres',
  'level' => 3,
  'organizational_unit_id' => 12,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-04-10 13:18:27',
));
        OrganizationalUnit::create(array (
  'name' => 'Departamento de Calidad, Acreditación y Proyectos de APS',
  'level' => 3,
  'organizational_unit_id' => 12,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Bodega',
  'level' => 4,
  'organizational_unit_id' => 489,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Puesta en Marcha en Hospitales',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Asesor Médico',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Externos',
  'level' => 3,
  'organizational_unit_id' => 2,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Centro Diurno',
  'level' => 5,
  'organizational_unit_id' => 397,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-03-20 07:45:16',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Centros y Dispositivos',
  'level' => 4,
  'organizational_unit_id' => 3,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad de Idoneidad',
  'level' => 4,
  'organizational_unit_id' => 45,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'Jardín Infantil',
  'level' => 5,
  'organizational_unit_id' => 242,
  'establishment_id' => 38,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
        OrganizationalUnit::create(array (
  'name' => 'UNIDAD BOESTADISTICO',
  'level' => 5,
  'organizational_unit_id' => 252,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => '0',
  'sirh_cost_center' => NULL,
  'deleted_at' => '2024-04-16 07:36:56',
));
        OrganizationalUnit::create(array (
  'name' => 'Unidad Medico Qx. Adulto Camas Medias',
  'level' => 4,
  'organizational_unit_id' => 317,
  'establishment_id' => 41,
  'sirh_function' => NULL,
  'sirh_ou_id' => NULL,
  'sirh_cost_center' => NULL,
  'deleted_at' => NULL,
));
    }
}
