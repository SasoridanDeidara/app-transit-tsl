<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SatwaController;

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

//Route::get('/', 'SatwaController@index')->name('satwa.index');
Route::get('/', [SatwaController::class, 'index'])->name('satwa.index');
Route::get('/create', 'SatwaController@create')->name('satwa.create');
Route::post('/store', 'SatwaController@store')->name('satwa.store');
