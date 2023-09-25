<?php

use App\Http\Controllers\ArtisanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', function () {
     return view('welcome');
})->name('welcome');

Route::post('email-confirmacao', [WelcomeController::class, 'email'])->name(
     'email-confirmacao'
);

Route::get('confirmaEmail', [WelcomeController::class, 'confirmaEmail'])->name(
     'confirmaEmail'
);