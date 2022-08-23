<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth; 

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('userAdd',[HomeController::class, 'userAdd'])->name('user.Add');

Route::post('user_Store',[HomeController::class, 'get_store_data'])->name('user.store');


//  excel here...........

Route::get('user_export',[HomeController::class, 'get_user_data'])->name('user.export');


