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

            // dd($user);

            if ( $user ) {
                logger()->info('Entro en el IF', [
                    'response' => $response,
                    'user'     => $user,
                ]);
                // $user->update([$provider . '_id' => $response->getId()]);
            } else {
                logger()->info('No encontró el usuario en la BD');
                // $user = User::create([
                //     $provider . '_id' => $response->getId(),
                //     'name'            => $response->getName(),
                //     'email'           => $response->getEmail(),
                //     'password'        => '',
                // ]);
            }

            auth()->login($user);

            return redirect()->intended(route('filament.admin.pages.dashboard'));

        } catch (\Laravel\Socialite\Two\InvalidStateException $e) {
            abort(403, 'Invalid state exception: ' . $e->getMessage());
        } catch (\Exception $e) {
            abort(403, 'General exception: ' . $e->getMessage());
        }
    }

}