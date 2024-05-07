<?php

namespace App\Observers\Parameter;

use App\Models\Parameter\Log;

class LogObserver
{
    /**
     * Handle the Log "created" event.
     */
    public function created(Log $log): void
    {
        $this->updateModule($log);
    }

    /**
     * Handle the Log "updated" event.
     */
    public function updated(Log $log): void
    {
        $this->updateModule($log);
    }

    /**
     * Handle the Log "deleted" event.
     */
    public function deleted(Log $log): void
    {
        //
    }

    /**
     * Handle the Log "restored" event.
     */
    public function restored(Log $log): void
    {
        //
    }

    /**
     * Handle the Log "force deleted" event.
     */
    public function forceDeleted(Log $log): void
    {
        //
    }

    /**
     * Update the module based on the log URI.
     *
     * @param  \App\Models\Parameter\Log  $log
     * @return void
     */
    private function updateModule(Log $log)
    {
        $patterns = [
            '/service[-_]request/' => 'Honorarios',
            '/replacement[-_]staff/' => 'Staff de reemplazo',
            '/job[-_]position[-_]profile/' => 'Perfil de cargos',
            '/drugs/' => 'Drogas',
            '/requirements/' => 'SGR',
            '/agreements/' => 'Convenios',
            '/request[-_]form[s]?/' => 'Abastecimiento',
            '/pharmacies/' => 'Farmacia',
            '/signatures/' => 'Firmas',
            '/partes/' => 'Partes',
            '/warehouse/' => 'Bodega 2.0',
            '/fonasa/' => 'Fonasa',
            '/allowances/' => 'Viáticos',
            '~^/\d+/firma$~' => 'Firmas',
            '/documents.*?signed[-_]document[-_]pdf/' => 'Firmas',
            '/documents.*?\d*$/' => 'Documentos',
            '~^/documents~' => 'Documentos',
            '~^/firma~' => 'Firmas',
            '~^/indicators~' => 'Indicadores',
            '/new[-_]upload[-_]rem/' => 'Carga de Rem',
            '/programming|professionalhours/' => 'Programación',
            '/subrogations/' => 'Subrogantes',
            '/authorities/' => 'Autoridades',
            '~^/rem~' => 'Carga de Rem',
            '/Clave Única/' => 'Clave Única',
            '~^/invoice~' => 'Honorarios',
            '/unspsc/' => 'UNSPSC',
            '/prof[-_]agenda/' => 'Agenda UST',
            '/handle[-_]task/' => 'Colas',
            '/finance\/payments|finance\./' => 'Estados de Pago',
            '/no[-_]attendance[-_]record/' => 'Asistencia',
            '/summary/' => 'Sumarios',
            '/amipass/' => 'Amipass',
            '/inventory|inventories/' => 'Inventario',
            '/hotel/' => 'Cabañas',
            '/login[-_]external/' => 'Login externo',
            '/meetings/' => 'Reuniones',
        ];

        foreach ($patterns as $pattern => $module) {
            if (preg_match($pattern, $log->uri)) {
                $log->module = $module;
                $log->save();
                break;
            }
        }
    }
}
