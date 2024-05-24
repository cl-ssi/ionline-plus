<?php

namespace App\Http\Controllers;

use App\Models\User;
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
                request()->session()->regenerate();
                abort(403, 'No encontró existe el usuario en el sistema');
            }

        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            abort(403, 'Invalid state exception: ' . $e->getMessage());
        } catch (\Exception $e) {
            abort(403, 'General exception: ' . $e->getMessage());
        }
    }

}