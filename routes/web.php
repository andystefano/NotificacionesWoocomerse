<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WoocomerseNotificationController;

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


 

Route::get('/testEnvio', [WoocomerseNotificationController::class,'testEnvio'])->name('testEnvio');


//NotificacionController
Route::get('/Listar', [WoocomerseNotificationController::class,'index'])->name('listar');

//editar
Route::get('/Notificaciones/{WoocomerseNotificationId}/edit', [WoocomerseNotificationController::class,'edit']);

Route::patch('/Notificaciones/{WoocomerseNotificationId}/edit', [WoocomerseNotificationController::class,'update'])->name('WoocomerseNotificationUpdate');

//NotificacionController
Route::get('/Notificaciones/{WoocomerseNotificationId}', [WoocomerseNotificationController::class,'show']);



Route::get('/Crear', function () {
    return view('crear');
})->name('crear');



Route::post('/Crear', [WoocomerseNotificationController::class,'store'])->name('store');


Route::get('/testEmail', [WoocomerseNotificationController::class,'FormTest'])->name('testEmail');

 
