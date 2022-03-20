<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
/*
|--------------------------------------------------------------------------
| My Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [DashboardController::class, 'Dashboard'])->name('Dashboard');
Route::get('index', [FrontendController::class, 'Index'])->name('Index');
/*
|--------------------------------------------------------------------------
|       ------------`````Backend Controller`````-------------
|--------------------------------------------------------------------------
*/
Route::get('homesection', [BackendController::class, 'HomeSection'])->name('HomeSection');
