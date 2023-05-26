<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//NotificacionController
Route::get('/Listar', [NotificacionController::class,'index'])->name('listar');



Route::get('/Crear', function () {
    return view('crear');
})->name('crear');

