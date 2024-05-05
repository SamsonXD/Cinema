<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

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

Route::get('/schedule', [ScheduleController::class, 'show']);
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ustawienia', [App\Http\Controllers\UstawieniaController::class, 'index'])->name('ustawienia');
Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule');
Route::get('reklamacje', 'ReklamacjeController@index')->name('reklamacje');
Route::get('/bilety', [App\Http\Controllers\BiletyController::class, 'index'])->name('bilety');
