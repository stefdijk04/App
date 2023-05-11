<?php

use App\Http\Controllers\Api\ReasonController;
use App\Http\Livewire\Forms;
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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::resource('reasons', ReasonController::class)->middleware(['auth', 'verified']);

// //Beheer pagina redenen
Route::get('admin', [ReasonController::class, 'index'])->middleware(['auth', 'verified'])->name('reasons');

//Livewire
Route::post('/dashboard', [Forms::class, 'submit'])->name('submit');


require __DIR__ . '/auth.php';
