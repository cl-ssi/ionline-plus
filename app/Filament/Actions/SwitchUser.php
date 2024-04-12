<?php

namespace App\Filament\Actions;

use App\Models\User;
use Auth;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;

class SwitchUser extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'Swith';
    }

    protected function setUp(): void
    {
        $this->action(function (User $record): void {
            if ( session()->has('god') ) {
                /* Clean session god (user_id) */
                session()->pull('god');
            } else {
                /* set god session to user_id */
                session(['god' => auth()->id()]);
            }
            // Auth::loginUsingId($record->id, true);
            // dd(auth()->user());
            auth()->login($record);

            // /** Registrar el switch */
            // if (session()->has('god')) {
            //     /** Log access */
            //     auth()->user()->accessLogs()->create([
            //         'type' => 'switch',
            //         'switch_id' => session()->get('god'),
            //         'enviroment' => env('OLD_SERVER') ? 'Servidor':'Cloud Run'
            //     ]);
            // }
            $this->success();
        })
            ->icon('heroicon-s-arrows-right-left')
            ->visible(auth()->user()->can('be god'));
    }
}