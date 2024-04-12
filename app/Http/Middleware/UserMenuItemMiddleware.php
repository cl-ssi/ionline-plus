<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Filament\Facades\Filament;
use Filament\Navigation\MenuItem;
use Filament\Navigation\UserMenuItem;
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
            UserMenuItem::make()
                ->url(fn (): string => route('filament.admin.pages.dashboard', ['user_id' => auth()->loginUsingId(session()->get('god'), session()->pull('god'))]))
                ->label('God Mode')
                ->color('danger')
                ->icon('heroicon-o-eye')
                ->visible(session()->has('god')),
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
