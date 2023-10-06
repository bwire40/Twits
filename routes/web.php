<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

/**
 * MVC- Model View Controller
 *
 * controller: handle requests
 * Model: interact with data, db or files
 * Views: frontend part
 *
 */

Route::get('/', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/terms',function (){
    return view('terms');
});
