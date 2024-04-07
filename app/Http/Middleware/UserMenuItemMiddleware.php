<?php

namespace App\Http\Middleware;

use Closure;
use Filament\Facades\Filament;
use Filament\Navigation\MenuItem;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMenuItemMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Filament::registerUserMenuItems([
            MenuItem::make()
                ->label('iOnline')
                ->url(fn (): string => route('return-to-ionline'))
                ->icon('heroicon-o-exclamation-circle')
                ->color('info')
                ->visible(fn (): bool => true), // auth()->user()->can('viewAny', Payment::class)
        ]);

        return $next($request);
    }
}
