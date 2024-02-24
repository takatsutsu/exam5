<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Models\Contact;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthController;



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



Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::get('/login', [RegisterController::class, 'login']);
Route::get('/register', [RegisterController::class, 'register']);
// Route::get('/', [RegisterController::class, 'register']);
Route::post('/login', [RegisterController::class, 'store']);


Route::middleware('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
});

// Route::get('/thanks', [ContactController::class, 'store']);
// Route::get('/register/registerthanks', [RegisterController::class, 'store']);
// Route::post('/confirm', [ContactController::class, 'confirm']);
