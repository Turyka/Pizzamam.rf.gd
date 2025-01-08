<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;
use App\Http\Controllers\keszit;
use App\Http\Controllers\KosarController;
use App\Http\Controllers\UserController;
use App\Models\keszitmodel;
use Illuminate\Validation\Rule;


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
Route::get('/keszit', [keszit::class,'keszit'])->middleware('auth');

Route::get('/', [main::class,'index']);

Route::get('/kosar', [KosarController::class, 'show'])->name('kosar');

Route::post('/kosar/store', [KosarController::class, 'store'])->name('kosar.store');

//Route::get('refresh-kosar-count', 'KosarController@refreshKosarCount')->name('refresh.kosar.count');

//Route::get('refresh-listing-count', [KosarController::class, 'refreshListingCount'])->name('refresh.listing.count');

Route::post('/kosar/clear', [KosarController::class, 'delete'])->name('kosar.clear');

Route::post('/kosar/add', [KosarController::class, 'add'])->name('kosar.add');

Route::post('/kosar/vege', [KosarController::class, 'vege'])->name('kosar.vege');

Route::get('/etlap', [main::class,'etlap'])->name('etlap');

Route::get('/etlap/{listing}/edit',[keszit::class, 'edit'])->name('etlap.edit')->middleware('auth');

Route::delete('/etlap/{listing}', [main::class,'destroy'])->name('etlap.destroy')->middleware('auth');

Route::post('/keszit/feltoltes', [keszit::class,'store']);

Route::put('/etlap/{listing}', [keszit::class,'update'])->name('etlap.update')->middleware('auth');

Route::post('/users', [UserController::class,'store']);

Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');

Route::get('/anyadat', [UserController::class,'create'])->middleware('guest');

Route::post('/login/authenticate', [UserController::class,'authenticate']);