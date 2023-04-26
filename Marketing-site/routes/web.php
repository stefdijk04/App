<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< Updated upstream
=======

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::resource('reasons', ReasonController::class)->middleware(['auth', 'verified']);

// //Beheer pagina redenen
Route::get('admin', [ReasonController::class, 'index'])->name('reasons');

//Livewire


require __DIR__.'/auth.php';
>>>>>>> Stashed changes
