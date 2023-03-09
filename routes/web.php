<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceptekController;
use App\Http\Controllers\KategoriakController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



// Receptek
Route::get('/recept/index', [ReceptekController::class, 'index']);
Route::get('/recept/show/{id}', [ReceptekController::class, 'show']);
Route::delete('/recept/destroy/{id}', [ReceptekController::class, 'destroy']);
Route::put('/recept/store', [ReceptekController::class, 'store']);
Route::get('/recept/all', [ReceptekController::class, 'all']); // összes recept, kategória nevével
Route::get('/recept/sort/{name}', [ReceptekController::class, 'sort']);

// Kategoriak
Route::get('/kategoria/index', [KategoriakController::class, 'index']);
Route::get('/kategoria/show/{id}', [KategoriakController::class, 'show']);
Route::delete('/kategoria/destroy/{id}', [KategoriakController::class, 'destroy']);
Route::put('/kategoria/store', [KategoriakController::class, 'store']);
require __DIR__.'/auth.php';
