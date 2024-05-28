<?php

namespace App\Http\Controllers;

use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(string $provider)
    {
        // $logout_uri = env('APP_URL').'/auth/'.$provider.'/logout';

        // try {
            $response = Socialite::driver($provider)->user();
            $user = User::firstWhere(['id' => $response->getId()]);

            if ( $user ) {
                auth()->login($user);
                return redirect()->intended(route('filament.admin.pages.dashboard'));
            } else {
                // request()->session()->regenerate();
                // cerrar sesion de CU llamando a una url con HTTP
                // session()->invalidate();
                // session()->regenerateToken();
                session(['userNotFound' => true ]);
                // session()->flash('msg', 'No existe el usuario en el sistema.');
                // $redirect = route('filament.admin.auth.login');
                return redirect()->away('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.env('APP_URL').'/auth/claveunica/logout');
                // Http::get('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);
                // return redirect()->route('filament.admin.auth.login')
                //     ->withErrors(['msg' => 'No existe el usuario en el sistema.']);
            }
        // } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
        //     request()->session()->regenerate();
        //     dd($e->getMessage());
        //     Http::get('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);
        //     return redirect()->route('filament.admin.auth.login')
        //         ->withErrors(['msg' => 'Invalid state exception: ' . $e->getMessage()]);
        // } catch (\Exception $e) {
        //     request()->session()->regenerate();
        //     dd($e->getMessage());
        //     Http::get('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);
        //     return redirect()->route('filament.admin.auth.login')
        //         ->withErrors(['msg' => 'General exception: ' . $e->getMessage()]);
        // }
    }

    public function logout(string $provider)
    {
        switch($provider) {
            case 'claveunica':
                if(env('APP_ENV') == 'local') {
                    // si el referer es local, redireccionar a la pagina de inicio
                    return redirect()->route('socialite.logout', ['provider' => 'local']);
                }
                else {
                    // si el referer es clave unica, cerrar sesion local y regenerar token
                    if(request()->headers->get('referer') == 'https://accounts.claveunica.gob.cl/') {
                        return redirect()->route('socialite.logout', ['provider' => 'local']);
                    }
                    else {
                        dd(request()->headers->get('referer'));
                        return redirect()->away('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.env('APP_URL').'/auth/claveunica/logout');
                    }
                }
            case 'local':
                if( session()->has('userNotFound') ) {
                    $userNotFound = session('userNotFound');
                }
                Filament::auth()->logout();
                session()->invalidate();
                session()->regenerateToken();
                if( $userNotFound ) {
                    session()->flash('msg', 'No existe el usuario en el sistema.');
                }
                return redirect()->route('filament.admin.auth.login');
            case 'redirect':
                return redirect()->route('filament.admin.auth.login');
        }
    }
}