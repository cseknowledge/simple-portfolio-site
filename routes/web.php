<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,PortfolioController};

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

Route::get('/', [HomeController::class, 'index'])->name('root');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/project/{id}', [PortfolioController::class, 'show'])->name('project');