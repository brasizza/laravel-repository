<?php

use App\Http\Controllers\ClienteController;
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

Route::get('/cliente-normal', [ClienteController::class, 'index']);
Route::get('/cliente-repository', [ClienteController::class, 'repository'])->name('cliente.repository');
Route::get('/cliente-store-repository', [ClienteController::class, 'store'])->name('cliente.save.repository');
