<?php

namespace App\Observers\Document\Signature;

use App\Models\Document\Signature\Approval;
// use App\Notifications\Document\Signature\NewApproval;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Storage;

class ApprovalObserver
{
    /**
     * Handle the Approval "created" event.
     */
    public function created(Approval $approval): void
    {
        /** Enviar notificación al jefe de la unidad  */
        if ( $approval->sent_to_ou_id ) {
            if($approval->sentToOu->manager) {
                Notification::make()
                    ->title('Nueva aprobación pendiente')
                    ->icon('heroicon-o-hand-thumb-up')
                    ->body($approval->subject)
                    ->actions([
                        Action::make('ver')
                            ->button()
                            ->url(route('filament.admin.resources.document.signature.approvals.edit', $approval->id, false), shouldOpenInNewTab: true),
                        ])
                    ->sendToDatabase($approval->sentToOu->manager);
                }
        }

        /** Si tiene un aprobador en particular envia la notificación al usuario específico */
        // if ( $approval->sent_to_user_id ) {
        //     $approval->sentToUser->notify(new NewApproval($approval));
        // }

        /** Agregar el approval_id al comienzo de los parámetros del callback */
        /** Solo si tiene un callback controller method */
        // if($approval->callback_controller_method) {
        //     $params = json_decode($approval->callback_controller_params,true) ?? [];
        //     $approval->callback_controller_params = json_encode(array_merge(array('approval_id' => $approval->id), $params));
        //     $approval->save();
        // }
    }

    /**
     * Handle the Approval "updated" event.
     */
    public function updated(Approval $approval): void
    {
        if($approval->sentToOu?->manager) {
            Notification::make()
                ->title('Nueva aprobación pendiente')
                ->icon('heroicon-o-hand-thumb-up')
                ->body($approval->subject)
                ->actions([
                    Action::make('ver')
                        ->button()
                        ->url(route('filament.admin.resources.document.signature.approvals.edit', $approval->id, false), shouldOpenInNewTab: true),
                ])
                ->sendToDatabase($approval->sentToOu->manager);
        }

        // $approval->save();

        // $approval->approver_ou_id = $approval->sent_to_ou_id ?? auth()->user()->organizational_unit_id;
        // $approval->approver_id = auth()->id();
        // $approval->approver_at = now();
        // $approval->save();

        // /** Preguntar si el estado cambio de null a true (los falsos no continuan la cadena) */
        // if ( $approval->status === true ) {
        //     /* Preguntar si tiene un NextApproval (es en cadena) */
        //     if ($approval->nextApproval) {
        //         /** Activar el NextApproval */
        //         $approval->nextApproval->update(['active' => true]);

        //         /** Notificar al jefe de unidad o persona */
        //         /** Enviar notificación al jefe de la unidad  */
        //         if($approval->nextApproval->sent_to_ou_id) {
        //             $approval->nextApproval->sentToOu->manager?->notify(new NewApproval($approval->nextApproval));
        //         }
        //         /** Si tiene un aprobador en particular envia la notificación al usuario específico */
        //         if($approval->nextApproval->sent_to_user_id) {
        //             $approval->nextApproval->sentToUser->notify(new NewApproval($approval->nextApproval));
        //         }
        //     }
        // }
    }

    /**
     * Handle the Approval "updating" event.
     */
    public function updating(Approval $approval): void
    {
        // /** Actualizar el estado del approval */
        // Si approval->status es null
        if ( $approval->status === null ) {
            $approval->approver_ou_id = null;
            $approval->approver_id = null;
            $approval->approver_observation = null;
            $approval->approver_at = null;
            $approval->status = null;
    
            if($approval->filename) {
                if(Storage::disk('gcs')->exists($approval->filename)) {
                    Storage::disk('gcs')->delete($approval->filename);
                }
            }
        }
    }

    /**
     * Handle the Approval "deleted" event.
     */
    public function deleted(Approval $approval): void
    {
        //
    }

    /**
     * Handle the Approval "restored" event.
     */
    public function restored(Approval $approval): void
    {
        //
    }

    /**
     * Handle the Approval "force deleted" event.
     */
    public function forceDeleted(Approval $approval): void
    {
        //
    }
}
