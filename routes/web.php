<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AccountSettingsController;

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

// Route to Home Page
Route::get('/', [PagesController::class, 'index']);

// Route to 404 page not found
Route::get('/404', function () {
    return view('errors.404');
});

// Route to Dashboard Page
Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

// Route to Account Settings Page
Route::prefix('account')->group(function () {
    Route::get('/settings', [PagesController::class, 'settings'])->name('account-settings');

    Route::post('/settings', [AccountSettingsController::class, 'updateName']);
    
    Route::get('/change-password', [PagesController::class, 'changePassword'])->name('account-change-password');
    
    Route::post('/change-password', [AccountSettingsController::class, 'updatePassword']);   
});

Auth::routes();
