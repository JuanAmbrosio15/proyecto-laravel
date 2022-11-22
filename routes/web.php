<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasillaController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\VotoController;
use App\Http\Controllers\Auth\LoginController;

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

//Route::get('casilla/pdf', 'CasillaController@generatepdf');
// Route::get('/casilla/pdf', [CasillaController::class, "generatepdf"]);

Route::get('/casilla/pdf',[CasillaController::class,'generatepdf'])->name('casilla.pdf');
Route::resource('casilla', CasillaController::class);
Route::resource('candidato', CandidatoController::class);



Route::resource('casilla', CasillaController::class);
Route::resource('candidato', CandidatoController::class);
Route::resource('funcionario', FuncionarioController::class);
Route::resource('voto', VotoController::class);


Route::get('/login',[LoginController::class,'index']);
Route::get('/login/facebook', [LoginController::class,'redirectToFacebookProvider']);
Route::get('/login/facebook/callback', [LoginController::class,'handleProviderFacebookCallback'] );


/**
*/