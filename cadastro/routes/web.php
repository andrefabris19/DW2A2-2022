<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\FuncioController;
use App\Models\Funcio;

Route::get('/', [FuncioController::class, 'index']);
Route::get('/funcios/create', [FuncioController::class, 'create']);
Route::get('/funcios/{id}', [FuncioController::class, 'show']);
Route::post('/funcios', [FuncioController::class, 'store']);
Route::delete('/funcios/{id}', [FuncioController::class, 'destroy']);
Route::get('/funcios/edit/{id}', [FuncioController::class, 'edit']);
Route::put('/funcios/update/{id}', [FuncioController::class, 'update']);

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', [FuncioController::class, 'dashboard']);

//Route::post('/funcios/join/{id}', [FuncioController::class, 'joinEvent'])->middleware('auth');

//Route::delete('/func/leave/{id}', [FuncioController::class, 'leaveEvent])->middleware('auth');
