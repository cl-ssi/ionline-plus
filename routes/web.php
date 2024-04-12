<?php

use App\Http\Controllers\IonlineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () { return redirect('/admin'); })->name('login');

Route::get('/ionline/login/{id}', [IonlineController::class,'login']);
Route::get('/ionline/return-to-ionline', [IonlineController::class,'returnToIonline'])->name('return-to-ionline');

Route::get('/switch-user', [IonlineController::class,'switchUser'])->name('switch-user');