<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AgendsController;
use App\Http\Controllers\EventsController;
use App\Models\Agends;
use App\Models\Events;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//crear rutas
Route::resource('admin/agends', AgendsController::class);
Route::post('admin/agends/create', [AgendsController::class, 'create'])->name('admin.agends.create');
Route::post('admin/agends/store', [AgendsController::class, 'store'])->name('admin.agends.store');

//creacion de eventos
Route::resource('admin/events', EventsController::class);
Route::post('admin/events/create', [EventsController::class, 'create'])->name('admin.events.create');
Route::post('admin/events/store', [EventsController::class, 'store'])->name('admin.events.store');




//no borrar
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
