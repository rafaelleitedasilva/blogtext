<?php

use App\Http\Controllers\ArtisanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{WelcomeController,HomeController};

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

Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('home', [HomeController::class, 'view'])->name('home.view');
Route::get('email', [WelcomeController::class, 'view'])->name('email.view');
Route::post('email', [WelcomeController::class, 'send'])->name('email.send');