<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


Route::get("/",[PublicController::class,"index"])->name("homepage");
Route::get("/{p_id}",[PublicController::class,"viewProduct"])->name("viewproduct");

//----------------auth------Route

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
