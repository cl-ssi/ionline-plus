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
        // try {
            $response = Socialite::driver($provider)->user();
            $user = User::firstWhere(['id' => $response->getId()]);

            if ( $user ) {
                auth()->login($user);
                return redirect()->intended(route('filament.admin.pages.dashboard'));
            } else {
                session(['userNotFound' => true ]);
                return redirect()->away('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.env('APP_URL').'/auth/claveunica/logout');
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
                // Local: Ambiente Desarrollo
                if(env('APP_ENV') == 'local') {
                    // Si el referer es local, redirecciona a la misma funcion pero con el provider 'local'
                    return redirect()->route('socialite.logout', ['provider' => 'local']);
                }
                // Proudcción: Clave Unica
                else {
                    $referer = parse_url( request()->headers->get('referer') );
                    // Si el referer es clave unica, cerrar sesion local y regenerar token
                    if( $referer['host'] == 'accounts.claveunica.gob.cl' ) {
                        // Hace un redirect a esta misma función pero con el provider 'local'
                        return redirect()->route('socialite.logout', ['provider' => 'local']);
                    }
                    else {
                        // Si el referer no es clave unica, redirecciona a cerrar sesión de clave única
                        return redirect()->away('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.env('APP_URL').'/auth/claveunica/logout');
                    }
                }
            case 'local':
                // Si existe la variable de sesión 'userNotFound', la guarda en una variable temporal
                if( session()->has('userNotFound') ) {
                    $userNotFound = session('userNotFound');
                }

                // Cerrar la sesión local y renovar los tokens
                Filament::auth()->logout();
                session()->invalidate();
                session()->regenerateToken();

                // Si la variable de sesión 'userNotFound' existe, la vuelve a guardar para mostrar en pantalla
                if( $userNotFound ) {
                    session()->flash('msg', 'No existe el usuario en el sistema.');
                }
                return redirect()->route('filament.admin.auth.login');
            default:
                // Para el botón de logout que viene por defecto en el panel 'redirect'
                return redirect()->route('filament.admin.auth.login');
        }
    }
}