<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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
Route::group([],function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('homePage');
    Route::get('/about', [PortfolioController::class, 'about'])->name('aboutPage');
    Route::get('/projects', [PortfolioController::class, 'projects'])->name('projectsPage');
    Route::get('/contact', [PortfolioController::class, 'contact'])->name('contactPage');
});
