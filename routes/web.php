<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Form\TestController;

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

Route::get('/listagem-usuario', [UserController::class, 'listUser']);

/**Routa::verbo('uri'), [nomeControle::class, 'nomemetodo]); */

/**
* Verbo Get
*/
Route::get('usuarios', 'App\Http\Controllers\Form\TestController@listAllUsers')->name('users');
Route::get('usuarios/{user}', 'App\Http\Controllers\Form\TestController@listUser')->name('user');

/**
* Verbo Post
*/

/**
* Verbo Put/Patch
*/

/**
* Verbo Delete
*/
