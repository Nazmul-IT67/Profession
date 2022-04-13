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
|       ------------`````Dashboard Controller`````-------------
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [DashboardController::class, 'Dashboard'])->name('Dashboard');
Route::get('user', [DashboardController::class, 'AllUser'])->name('AllUser');
Route::get('about', [DashboardController::class, 'About'])->name('About');
Route::get('about-list', [DashboardController::class, 'AboutList'])->name('AboutList');
Route::get('add-services', [DashboardController::class, 'Services'])->name('Services');
Route::get('services-list', [DashboardController::class, 'ServicesList'])->name('ServicesList');
Route::get('all-portfolio', [DashboardController::class, 'AllPortfolio'])->name('AllPortfolio');
Route::get('add-portfolio', [DashboardController::class, 'AddPortfolio'])->name('AddPortfolio');
Route::get('all-testimunial', [DashboardController::class, 'AllTestimunial'])->name('AllTestimunial');
Route::get('add-testimunial', [DashboardController::class, 'AddTestimunial'])->name('AddTestimunial');
/*
|--------------------------------------------------------------------------
|       ------------`````Backend Controller`````-------------
|--------------------------------------------------------------------------
*/
Route::POST('add-about', [BackendController::class, 'AddAbout'])->name('AddAbout');
Route::POST('add-services', [BackendController::class, 'AddServices'])->name('AddServices');
Route::POST('portfolio-post', [BackendController::class, 'PortfolioPost'])->name('PortfolioPost');
Route::POST('submitdata', [BackendController::class, 'TestimunialPost'])->name('TestimunialPost');
/*
|--------------------------------------------------------------------------
|       ------------`````Frontend Controller`````-------------
|--------------------------------------------------------------------------
*/
Route::get('index', [FrontendController::class, 'Index'])->name('Index');

