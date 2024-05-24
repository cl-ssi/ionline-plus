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
        try {
            $response = Socialite::driver($provider)->user();
            $user = User::firstWhere(['id' => $response->getId()]);

            if ( $user ) {
                auth()->login($user);
                return redirect()->intended(route('filament.admin.pages.dashboard'));
            } else {
                // cerrar sesion de CU llamando a una url con HTTP
                $logout_uri = env('APP_URL').'/auth/'.$provider.'/logout';
                Http::get('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);

                request()->session()->regenerate();
                return redirect()->route('filament.admin.auth.login')
                    ->withErrors(['msg' => 'No existe el usuario en el sistema.']);
            }
        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            return redirect()->route('filament.admin.auth.login')
                ->withErrors(['msg' => 'Invalid state exception: ' . $e->getMessage()]);
        } catch (\Exception $e) {
            return redirect()->route('filament.admin.auth.login')
                ->withErrors(['msg' => 'General exception: ' . $e->getMessage()]);
        }
    }

    public function logout(string $provider)
    {
        request()->session()->regenerate();
        auth()->logout();
        return redirect()->route('filament.admin.auth.login');
    }

}