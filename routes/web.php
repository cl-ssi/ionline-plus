<?php

use App\Http\Controllers\IonlineController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/* Redirección de la raíz a la página de inicio de filament */
// Route::redirect('/', '/admin',301);

// Route::get('/login', function () { return redirect('/'); })->name('login');

Route::get('/ionline/login/{id}', [IonlineController::class,'login']);
Route::get('/ionline/return-to-ionline', [IonlineController::class,'returnToIonline'])->name('return-to-ionline');


Route::get('/document/documents/{document}', [PdfController::class,'document'])->name('document.documents.show');

Route::controller(TestController::class)->middleware(['auth'])->prefix('test')->name('test')->group(function () {
    Route::get('/image', 'image');
    Route::get('/signature/{otp}', 'signature');
 
    // Route::get('/user/profile', function () {
    //     // Uses first & second middleware...
    // });
});