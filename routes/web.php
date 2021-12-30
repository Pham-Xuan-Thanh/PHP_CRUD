<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MenuController;
use Illuminate\Routing\Redirector;
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
Route::prefix('auth')-> group(function(){
    Route::get('login',[LoginController::class,'index'])->name('login');
    Route::get('register',[LoginController::class,'registration'])->name('register');
    Route::post('login/post',[LoginController::class,'postLogin'])->name('login.post');
    Route::post('register/post',[LoginController::class,'postRegistration'])->name('register.post');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');

});
Route::prefix('/menus')->group(function(){
    Route::get('/', [MenuController::class,'index'] )->name('menus');
    Route::get('/add', [MenuController::class,'create'] )->name('menus.add');
    Route::post('/add', [MenuController::class,'add'] );
    Route::get('/list', [MenuController::class,'index'] );
    Route::delete('/destroy', [MenuController::class,'destroy'] );
    Route::get('/edit/{menu}', [MenuController::class,'show'] );
    Route::post('/edit/{menu}', [MenuController::class,'edit'] );

});

Route::get('/', function () {
    return redirect()->route('login');
});
