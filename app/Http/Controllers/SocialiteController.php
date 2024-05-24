<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect(string $provider)
    {
        return Socialite::driver($provider)
            ->setScopes(['openid', 'run','name'])
            ->redirect();
    }

    public function callback(string $provider)
    {
        $logout_uri = env('APP_URL').'/auth/'.$provider.'/logout';

        try {
            $response = Socialite::driver($provider)->user();
            $user = User::firstWhere(['id' => $response->getId()]);

            if ( $user ) {
                auth()->login($user);
                return redirect()->intended(route('filament.admin.pages.dashboard'));
            } else {
                request()->session()->regenerate();
                // cerrar sesion de CU llamando a una url con HTTP
                Http::get('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);
                return redirect()->route('filament.admin.auth.login')
                    ->withErrors(['msg' => 'No existe el usuario en el sistema.']);
            }
        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            request()->session()->regenerate();
            dd($e->getMessage());
            Http::get('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);
            return redirect()->route('filament.admin.auth.login')
                ->withErrors(['msg' => 'Invalid state exception: ' . $e->getMessage()]);
        } catch (\Exception $e) {
            request()->session()->regenerate();
            dd($e->getMessage());
            Http::get('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);
            return redirect()->route('filament.admin.auth.login')
                ->withErrors(['msg' => 'General exception: ' . $e->getMessage()]);
        }
    }

    public function logout(string $provider)
    {
        switch($provider) {
            case 'claveunica':
                // Si viene de cerrar sessión de clave unica, entonces
                // Cerrar sesion local y regenerar token
                auth()->logout();
                request()->session()->regenerate();
                return redirect()->route('filament.admin.auth.login');
            case 'test':
                $logout_uri = env('APP_URL').'/auth/claveunica/logout';
                Http::get('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);
            default:
                // Si el ambiente es local, cerrar sesion local y regenerar token
                if(env('APP_ENV') == 'local') {
                    auth()->logout();
                    request()->session()->regenerate();
                    return redirect()->route('filament.admin.auth.login');
                }
                // Si el ambiente es de producción, cerrar sesion de CU que redirecciona 
                // al case 'claveunica' para cerrar sesion local y regenerar token
                $logout_uri = env('APP_URL').'/auth/claveunica/logout';
                return redirect()->away('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);
        }

        // $logout_uri = env('APP_URL').'/auth/'.$provider.'/logout';
        
        // if($provider == 'claveunica') {
        //     $logout_uri = env('APP_URL').'/auth/'.$provider.'/logout';
        // }
        // else {
        //     $logout_uri = env('APP_URL').'/logout';
        // }
        // $provider = 'claveunica';
        // // Return redirect url
        // dd($logout_uri);
        // auth()->logout();
        // return redirect()->route('filament.admin.auth.login');
        //https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect=https://p.saludtarapaca.gob.cl/auth/claveunica/logout
    }

}