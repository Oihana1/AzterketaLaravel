<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HegaldiaController;

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

Route::get('/',[HegaldiaController::class, 'hegaldiakErakutsi'])->name('hegaldiak.index');
Route::get('/hegaldia/edit/{hegaldia}',[HegaldiaController::class, 'edit'])->name('hegaldiak.edit');
Route::put('/hegaldia/edit/{hegaldia}',[HegaldiaController::class, 'update'])->name('hegaldiak.update');
