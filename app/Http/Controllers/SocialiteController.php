<?php

namespace App\Http\Controllers;

use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;
use SocialiteProviders\ClaveUnica\ClaveUnicaExtendSocialite;

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
                return redirect()->route('socialite.logout-redirect', ['provider' => $provider]);
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

    public function logoutRedirect(string $provider)
    {
        $logout_uri = env('APP_URL').'/auth/'.$provider.'/logout';
        return redirect()->away('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);
    }
    
    public function logoutCallback(string $provider)
    {
        return redirect()->route('socialite.logout');
    }

    public function logout()
    {
        // Comprueba si existe la variable de sesión 'userNotFound'
        $userNotFound = session()->has('userNotFound');

        // Cerrar la sesión local y renovar los tokens
        Filament::auth()->logout();
        session()->invalidate();
        session()->regenerateToken();

        // Si la variable de sesión 'userNotFound' existe, la vuelve a guardar para mostrar en pantalla
        return redirect()->route('filament.admin.auth.login')
            ->withErrors($userNotFound ? ['msg' => 'El usuario no existe'] : []);
    }

}