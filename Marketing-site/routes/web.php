<?php

use App\Http\Controllers\Api\ReasonController;
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
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin', function () {
//     return view('admin', [
//         'reasons' => $reasons
//     ]);
// })->middleware(['auth', 'verified'])->name('admin');

// Route::resource('admin', ReasonController::class)->middleware(['auth', 'verified']);

//Beheer pagina redenen
Route::get('admin', [ReasonController::class, 'index'])->name('admin.index');
Route::post('admin', [ReasonController::class, 'update'])->name('admin.update');

require __DIR__.'/auth.php';
