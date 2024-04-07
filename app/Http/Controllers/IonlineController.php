<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IonlineController extends Controller
{
    public function login($id)
    {
        // verificar que no esté logeado
        if(Auth::check() == false) {
            
            $login = DB::table('sessions')
                ->where('id', $id)
                ->where('last_activity', '<', time() + 60 * 15)
                ->first();
            
            if($login) {
                Auth::loginUsingId($login->user_id, true);
            }
        }

        // Redirecciona al dashboard, pero 
        // si no se pudo logear mostrará el login de Filament
        return redirect()->route('filament.admin.pages.dashboard');
    }

    public function returnToIonline()
    {
        Auth::logout();
        return redirect(env('IONLINE_URL').'/home');
    }
}
