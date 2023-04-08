<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\SolicitudController;

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

// Route::get('/', function () {
//     return view('layoutb.layout');
// });
// Route::get('/', function () {return view('layout.layout');});
Route::get('/',[InicioController::class, 'actBienvenida']);


// ------------------------------BORRAR
Route::get('/old',[InicioController::class, 'actBienvenidab']);
// solicitud
Route::get('solicitudb/solicitud',[SolicitudController::class, 'actSolicitudb']);
// ------------------------------BORRAR
// solicitud
Route::get('solicitud/solicitud',[SolicitudController::class, 'actSolicitud']);





Route::get('/l', function () {
    return view('layout.layout1');
});