<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SalutacionsController;
use App\Http\Controllers\AlumneController;
use App\Http\Controllers\FrontController;

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

Route::get('/', [FrontController::class, 'index']);

Route::get('hola', function() { return "Hola món!"; });

Route::get('nom/{nom}', function($nom) { return "Hola " . $nom; });

Route::get('edat/{edat?}', function($edat = 38){
    return "La teva edat és " . $edat;
});

Route::get('salutacio', [SalutacionsController::class, 'index']);

Route::resource('alumne', AlumneController::class);