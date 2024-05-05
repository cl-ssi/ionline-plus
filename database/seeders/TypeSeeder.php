<?php

namespace Database\Seeders;

use App\Models\Document\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create(
            array(
                'name'             => 'Memo',
                'description'      => 'Documentos de comunicación',
                'doc_digital'      => 1,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Oficio',
                'description'      => 'Documentos de comunicación',
                'doc_digital'      => 1,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Carta',
                'description'      => 'Documentos de comunicación',
                'doc_digital'      => 1,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Circular',
                'description'      => 'Documentos de comunicación',
                'doc_digital'      => 1,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Resolución',
                'description'      => 'Documentos de decisión',
                'doc_digital'      => 1,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Convenio',
                'description'      => 'Documentos de decisión',
                'doc_digital'      => 1,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Ordinario',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => NULL,
                'deleted_at'       => '2023-02-04 10:20:04',
            )
        );
        Type::create(
            array(
                'name'             => 'Informe',
                'description'      => 'Documentos de juicio',
                'doc_digital'      => 1,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Protocolo',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Acta',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Acta de recepción',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Acta de recepción obras menores',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Decreto',
                'description'      => 'Documentos de decisión',
                'doc_digital'      => 1,
                'partes_exclusive' => 1,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Demanda',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => 1,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Permiso Gremial',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => 1,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Otro',
                'description'      => 'Otro tipo de documento',
                'doc_digital'      => 1,
                'partes_exclusive' => 1,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Notificación',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => 1,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Citación',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => 1,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Resolución Continuidad Convenio',
                'description'      => NULL,
                'doc_digital'      => 1,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Viático',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Certificado Disponibilidad Presupuestaria',
                'description'      => NULL,
                'doc_digital'      => NULL,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
        Type::create(
            array(
                'name'             => 'Dictámen',
                'description'      => 'Documentos de juicio',
                'doc_digital'      => 1,
                'partes_exclusive' => NULL,
                'deleted_at'       => NULL,
            )
        );
    }
}
