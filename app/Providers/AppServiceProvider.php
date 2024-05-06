<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Number;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /** Para que los Policies tengan la misma estructura de los modelos */
        Gate::guessPolicyNamesUsing(function ($modelClass) {
            // Reemplaza 'App\Models' por 'App\Policies' y añade 'Policy' al final del nombre de la clase
            $policyClass = str_replace('App\Models', 'App\Policies', $modelClass) . 'Policy';
    
            return $policyClass;
        });
    }
}
