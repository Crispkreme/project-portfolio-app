<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;

use App\Http\Controllers\Admin\HomesliderController;

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

Route::get('/', [MainController::class, 'index'])->name('index');

// ADMIN FUNCTIONALITY
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/admin/dashboard', [MainController::class, 'adminDashboard'])->name('admin.dashboard');

    Route::get('/view/profile', [MainController::class, 'viewProfile'])->name('view.profile');
    Route::get('/edit/profile', [MainController::class, 'editProfile'])->name('edit.profile');
    Route::post('/update/profile', [MainController::class, 'updateProfile'])->name('update.profile');
    
    Route::get('/view/change/password', [MainController::class, 'viewChangePassword'])->name('view.change.password');
    Route::post('/update/change/password', [MainController::class, 'updateChangePassword'])->name('update.change.password');

    // HOME SLIDER
    Route::get('/view/home/slider', [HomesliderController::class, 'viewHomeSlider'])->name('view.home.slider');
    Route::post('/update/home/slider', [HomesliderController::class, 'updateHomeSlider'])->name('update.home.slider');

    // CLIENTS
    Route::get('/view/client/slider', [ClientController::class, 'viewClient'])->name('view.client.slider');
    Route::get('/form/client/slider', [ClientController::class, 'formClient'])->name('form.client.slider');
    Route::post('/store/client/slider', [ClientController::class, 'storeClient'])->name('store.client.slider');
});

require __DIR__.'/auth.php';
