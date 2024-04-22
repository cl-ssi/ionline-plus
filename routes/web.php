<?php

use App\Http\Controllers\IonlineController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

/* Redirección de la raíz a la página de inicio de filament */
// Route::redirect('/', '/admin',301);

// Route::get('/login', function () { return redirect('/admin'); })->name('login');

Route::get('/ionline/login/{id}', [IonlineController::class,'login']);
Route::get('/ionline/return-to-ionline', [IonlineController::class,'returnToIonline'])->name('return-to-ionline');

Route::get('/switch-user', [IonlineController::class,'switchUser'])->name('switch-user');

Route::get('/document/documents/{document}', [PdfController::class,'document'])->name('document.documents.show');