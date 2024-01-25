<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginLaravelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [loginLaravelController::class,'home']);
Route::get('/submit', [loginLaravelController::class,'submit']);
Route::get('login', [loginLaravelController::class,'login']);
Route::get('/logout', [loginLaravelController::class,'logout']);