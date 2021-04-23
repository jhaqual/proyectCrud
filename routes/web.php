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


Route::resource('/user',UserController::class);




// Configuración A
/*
/ Route::get('/', 'UserController@index')->name('users.index');
/ Route::post('users', 'UserController@store')->name('users.store');
/ Route::post('users/{user}', 'UserController@edit')->name('users.edit');
/ Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
*/


// Otra forma de configurar los controladores
/*
/ use App\Http\Controllers\UserController;
/ Route::get('/', [UserController::class,'index']);
/ Route::post('users', [UserController::class, 'store'])->name('users.store');
/ Route::delete('users/{user}', [UserController::class,'destroy'])->name('users.destroy');
/
*/
