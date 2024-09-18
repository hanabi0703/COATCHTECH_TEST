<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MiddlewareController;

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

// Route::get('/register', [UserController::class, 'register']);
// Route::post('/register', [UserController::class, 'createUser']);

Route::middleware('auth')->group(function () {
Route::get('/top', [UserController::class, 'top']);
});


Route::get('/', [UserController::class, 'top']);
Route::post('/', [TestController::class, 'contactCreate']);

Route::get('/contacts/confirm', [TestController::class, 'confirm']);
Route::post('/contacts/confirm', [TestController::class, 'confirm']);

Route::get('/contacts', [TestController::class, 'store']);
Route::post('/contacts', [TestController::class, 'store']);

Route::get('/revise', [TestController::class, 'revise']);
Route::post('/revise', [TestController::class, 'revise']);
