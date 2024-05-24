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
        $logout_uri = env('APP_URL').'/auth/'.$provider.'/logout';
        return redirect()->away('https://accounts.claveunica.gob.cl/api/v1/accounts/app/logout?redirect='.$logout_uri);
        if($provider == 'claveunica') {
            $logout_uri = env('APP_URL').'/auth/'.$provider.'/logout';
        }
        else {
            $logout_uri = env('APP_URL').'/logout';
        }
        $provider = 'claveunica';
        // Return redirect url
        dd($logout_uri);
        request()->session()->regenerate();
        // auth()->logout();
        // return redirect()->route('filament.admin.auth.login');
    }

}