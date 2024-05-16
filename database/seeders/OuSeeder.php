<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rrhh\OrganizationalUnit;

class OuSeeder extends Seeder
{
    public function run()
    {

        OrganizationalUnit::create([
            'id' => 1,
            'name' => 'Dirección',
            'level' => 1,
            'organizational_unit_id' => null,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 2,
            'name' => 'Subdirección de Gestión Asistencial',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 12,
            'name' => 'Dirección de APS',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 19,
            'name' => 'Departamento Planificación y Control de Gestión',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 487,
            'name' => 'Departamento de Relaciones Institucionales',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 393,
            'name' => 'Fiscalía',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 69,
            'name' => 'Unidad de Relación Asistencial Docente R.A.D.',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 67,
            'name' => 'Relacionadora Laboral',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 66,
            'name' => 'Unidad de Gestión del Riesgo en Emergencia y Desastres',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 65,
            'name' => 'Oficina de Partes',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 64,
            'name' => 'Departamento de Participación Social, Gestión al usuario y Gobernanza',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 61,
            'name' => 'Departamento Asesoría Jurídica',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 60,
            'name' => 'Departamento de Auditoría Interna',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 44,
            'name' => 'Subdirección de Gestión y Desarrollo de las Personas',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 31,
            'name' => 'Subdirección de Recursos Físicos y Financieros',
            'level' => 2,
            'organizational_unit_id' => 1,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 3,
            'name' => 'Departamento de Red de Salud Mental',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 7,
            'name' => 'Departamento de Redes Hospitalarias',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 30,
            'name' => 'P.R.A.I.S.',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 383,
            'name' => 'Departamento de Integración Digital',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 377,
            'name' => 'Departamento de Gestión Odontológica',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 376,
            'name' => 'Departamento de Gestión Farmacéutica',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 494,
            'name' => 'Unidad de Puesta en Marcha en Hospitales',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 495,
            'name' => 'Asesor Médico',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 16,
            'name' => 'Departamento Red de Urgencias',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 68,
            'name' => 'Departamento de Calidad y Seguridad del Paciente',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 17,
            'name' => 'S.A.M.U.',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 21,
            'name' => 'Departamento de Epidemiología',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 22,
            'name' => 'Departamento de Estadísticas y Gestión de la Información',
            'level' => 3,
            'organizational_unit_id' => 2,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 398,
            'name' => 'Unidad de Gestión Administrativa y Organizacional',
            'level' => 4,
            'organizational_unit_id' => 3,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 397,
            'name' => 'Unidad de Gestión de Modelo de Atención y Procesos Clínicos',
            'level' => 4,
            'organizational_unit_id' => 3,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 374,
            'name' => 'Unidad de Dispositivos Residenciales de Salud',
            'level' => 4,
            'organizational_unit_id' => 3,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 498,
            'name' => 'Unidad de Centros y Dispositivos',
            'level' => 4,
            'organizational_unit_id' => 3,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 9,
            'name' => 'Unidad de Gestión de Demanda',
            'level' => 4,
            'organizational_unit_id' => 7,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 488,
            'name' => 'Unidad de Gestión de Servicios Clínicos de Apoyo y Logísticos',
            'level' => 4,
            'organizational_unit_id' => 7,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 10,
            'name' => 'Unidad de Procesos Clínicos Integrados',
            'level' => 4,
            'organizational_unit_id' => 7,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 489,
            'name' => 'Gestión Clínica en el Curso de la Vida',
            'level' => 3,
            'organizational_unit_id' => 12,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 490,
            'name' => 'Gestión Administrativa en Atención Primaria de Salud',
            'level' => 3,
            'organizational_unit_id' => 12,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 13,
            'name' => 'Departamento Modelo de Salud Familiar y Territorio',
            'level' => 3,
            'organizational_unit_id' => 12,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 492,
            'name' => 'Departamento de Calidad, Acreditación y Proyectos de APS',
            'level' => 3,
            'organizational_unit_id' => 12,
            'establishment_id' => 38,
        ]);
    
        
        OrganizationalUnit::create([
            'id' => 20,
            'name' => 'Departamento de Tecnologías de la Información y Comunicaciones',
            'level' => 3,
            'organizational_unit_id' => 31,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 399,
            'name' => 'Departamento Gestión de Proyectos',
            'level' => 3,
            'organizational_unit_id' => 31,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 40,
            'name' => 'Departamento de Gestión Financiera',
            'level' => 3,
            'organizational_unit_id' => 31,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 32,
            'name' => 'Departamento de Gestión de Recursos Físicos e Inversiones de la Red',
            'level' => 3,
            'organizational_unit_id' => 31,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 37,
            'name' => 'Departamento de Abastecimiento y Logística',
            'level' => 3,
            'organizational_unit_id' => 31,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 392,
            'name' => 'Unidad de Control de Mantenimiento de la Red',
            'level' => 4,
            'organizational_unit_id' => 32,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 33,
            'name' => 'Unidad de Planificación de Análisis y Control de Equipos y Equipamiento de la Red',
            'level' => 4,
            'organizational_unit_id' => 32,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 34,
            'name' => 'Unidad de Planificación de Análisis y Control de Infraestructura, Proyecto Inspección Técnica e Inversiones de la Red',
            'level' => 4,
            'organizational_unit_id' => 32,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 35,
            'name' => 'Unidad de Gestión y Control de Procesos Administrativos de Inversiones',
            'level' => 4,
            'organizational_unit_id' => 32,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 39,
            'name' => 'Unidad de Servicios Generales',
            'level' => 4,
            'organizational_unit_id' => 37,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 38,
            'name' => 'Unidad de Planificación de Ejecución y Control de Abastecimiento, obras, equipos y Equipamiento',
            'level' => 4,
            'organizational_unit_id' => 37,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 43,
            'name' => 'Unidad de Contabilidad',
            'level' => 4,
            'organizational_unit_id' => 40,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 42,
            'name' => 'Unidad de Cobranzas',
            'level' => 4,
            'organizational_unit_id' => 40,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 41,
            'name' => 'Unidad de Planificación, análisis y control financiera y presupuestaria',
            'level' => 4,
            'organizational_unit_id' => 40,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 50,
            'name' => 'Departamento de Calidad de Vida Laboral',
            'level' => 3,
            'organizational_unit_id' => 44,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 55,
            'name' => 'Departamento de Seguridad, Salud Ocupacional y Gestión Ambiental',
            'level' => 3,
            'organizational_unit_id' => 44,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 59,
            'name' => 'Planificación y Control de Gestión de Recursos Humanos',
            'level' => 3,
            'organizational_unit_id' => 44,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 45,
            'name' => 'Departamento de Gestión de Recursos Humanos',
            'level' => 3,
            'organizational_unit_id' => 44,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 240,
            'name' => 'Departamento de Gestión y Desarrollo del Talento',
            'level' => 3,
            'organizational_unit_id' => 44,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 46,
            'name' => 'Unidad de Gestión de Personal y Ciclo de Vida laboral',
            'level' => 4,
            'organizational_unit_id' => 45,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 499,
            'name' => 'Unidad de Idoneidad',
            'level' => 4,
            'organizational_unit_id' => 45,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 49,
            'name' => 'Unidad de Remuneraciones',
            'level' => 4,
            'organizational_unit_id' => 45,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 242,
            'name' => 'Unidad de Cuidados Infantiles',
            'level' => 4,
            'organizational_unit_id' => 50,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 54,
            'name' => 'Unidad de Salud del Trabajador',
            'level' => 4,
            'organizational_unit_id' => 50,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 52,
            'name' => 'Unidad de Apoyo Psicosocial',
            'level' => 4,
            'organizational_unit_id' => 50,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 51,
            'name' => 'Servicio de Bienestar',
            'level' => 4,
            'organizational_unit_id' => 50,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 57,
            'name' => 'Unidad de Salud Ocupacional y Saludablemente',
            'level' => 4,
            'organizational_unit_id' => 55,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 56,
            'name' => 'Unidad de Prevención de Riesgos y Gestión Ambiental',
            'level' => 4,
            'organizational_unit_id' => 55,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 70,
            'name' => 'Unidad de Drogas',
            'level' => 3,
            'organizational_unit_id' => 61,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 72,
            'name' => 'Unidad de Participación Social',
            'level' => 3,
            'organizational_unit_id' => 64,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 73,
            'name' => 'Unidad de Gestión al Usuario',
            'level' => 3,
            'organizational_unit_id' => 64,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 394,
            'name' => 'IAAS',
            'level' => 4,
            'organizational_unit_id' => 68,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 395,
            'name' => 'Calidad',
            'level' => 4,
            'organizational_unit_id' => 68,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 74,
            'name' => 'Oficina de Información Reclamos y Sugerencias (OIRS)',
            'level' => 4,
            'organizational_unit_id' => 73,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 48,
            'name' => 'Unidad de Reclutamiento y Selección de Personas',
            'level' => 4,
            'organizational_unit_id' => 240,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 47,
            'name' => 'Unidad de Capacitación y Formación',
            'level' => 4,
            'organizational_unit_id' => 240,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 500,
            'name' => 'Jardín Infantil',
            'level' => 5,
            'organizational_unit_id' => 242,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 375,
            'name' => 'Departamento de Odontología',
            'level' => 4,
            'organizational_unit_id' => 375,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 396,
            'name' => 'Farmacia Asistencial',
            'level' => 4,
            'organizational_unit_id' => 376,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 71,
            'name' => 'Droguería',
            'level' => 4,
            'organizational_unit_id' => 376,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 385,
            'name' => 'Unidad de Salud Digital',
            'level' => 4,
            'organizational_unit_id' => 383,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 428,
            'name' => 'Infanto Adolescente Medio Privativo Libertad (UHCIP)',
            'level' => 5,
            'organizational_unit_id' => 397,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 401,
            'name' => 'Comunicaciones',
            'level' => 3,
            'organizational_unit_id' => 487,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 382,
            'name' => 'Género',
            'level' => 3,
            'organizational_unit_id' => 487,
            'establishment_id' => 38,
        ]);
        
        OrganizationalUnit::create([
            'id' => 493,
            'name' => 'Unidad de Bodega',
            'level' => 4,
            'organizational_unit_id' => 489,
            'establishment_id' => 38,
        ]);
        


        
    }
}
