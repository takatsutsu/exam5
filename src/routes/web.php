<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Models\Contact;

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
Route::get('/register', [RegisterController::class, 'register']);
// Route::get('/thanks', [ContactController::class, 'store']);
Route::get('/register/registerthanks', [RegisterController::class, 'store']);
Route::get('/thanks', [ContactController::class, 'store']);
