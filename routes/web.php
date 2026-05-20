<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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

Route::get('/games',[GameController::class,'index'])->name('games.index');
Route::post('/games',[GameController::class,'store'])->name('games.store');
Route::put('/games/{id}',[GameController::class,'update'])->name('games.update');
Route::get('/games/{id}/edit',[GameController::class,'edit'])->name('games.edit');
Route::delete('/games/{id}',[GameController::class,'destroy'])->middleware('game')->name('games.destroy');
Route::get('/games/{id}',[GameController::class,'show'])->name('games.show');

