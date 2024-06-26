<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CustomAuthController::class,'login']);
Route::get('/registration',[CustomAuthController::class,'registration']);

Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');

Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');

Route::get('/dashboard',[CustomAuthController::class,'dashboard']);
// Logout Route
Route::get('/logout', function() {
    Session::forget('logId');
    return redirect('/');
})->name('logout');