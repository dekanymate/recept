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

require __DIR__.'/auth.php';


//receptek

Route::post('/new-recept', [ReceptekController::class, 'store']);
Route::get('/receptek',  [ReceptekController::class, 'index']);
Route::delete('/delete-user', [ReceptekController::class, 'destroy']);

//kategoriák


Route::get('/kategoriak',  [KategoriakController::class, 'index']);