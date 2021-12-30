<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\LoginController;
use App\Http\Controllers\MenuController;
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
Route::get('/login', [LoginController::class,'index'] );
Route::prefix('/menus')->group(function(){
    Route::get('/add', [MenuController::class,'create'] );
    Route::post('/add', [MenuController::class,'add'] );
    Route::get('/list', [MenuController::class,'index'] );
    Route::delete('/destroy', [MenuController::class,'destroy'] );
    Route::get('/edit/{menu}', [MenuController::class,'show'] );
    Route::post('/edit/{menu}', [MenuController::class,'edit'] );

});

Route::get('/', function () {
    return view('welcome');
});
