<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('home', [HomeController::class, 'view'])->name('home.view');
Route::get('contact', [ContactController::class, 'view'])->name('contact.view');
Route::get('search', [SearchController::class, 'view'])->name('search.view');
Route::get('email', [WelcomeController::class, 'view'])->name('email.view');
Route::get('blog', [BlogController::class, 'view'])->name('blog.view');
//Criar parametrização da rota com id criptografado
Route::get('post/{id}', [PostController::class, 'view'])->name('post.view');

Route::post('email', [WelcomeController::class, 'send'])->name('email.send');
