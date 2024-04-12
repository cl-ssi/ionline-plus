<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Resources\Pages\EditRecord;
use Filament\Tables\Actions\Action;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\DeleteAction::make(),
            \Filament\Actions\Action::make('Switch')
                // TODO: @AquaroTorres reutilizar codigo del action
                ->action(function (User $user) {
                    /* set god session to user_id */
                    session(['god' => auth()->id()]);
                    auth()->login($user);
                    return redirect()->route('filament.admin.pages.dashboard');
                })
                ->icon('heroicon-s-arrows-right-left')
                ->hidden(session()->has('god'))
        ];
    }
}
