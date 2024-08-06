<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('pages.admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ADMIN FUNCTIONALITY
Route::middleware('auth')->group(function () {

    Route::get('/view/profile', [MainController::class, 'viewProfile'])->name('view.profile');
    Route::get('/edit/profile', [MainController::class, 'editProfile'])->name('edit.profile');
    Route::post('/update/profile', [MainController::class, 'updateProfile'])->name('update.profile');
    
    Route::get('/view/change/password', [MainController::class, 'viewChangePassword'])->name('view.change.password');
    Route::post('/update/change/password', [MainController::class, 'updateChangePassword'])->name('update.change.password');

    Route::get('/view/home/slider', [HomesliderController::class, 'viewHomeSlider'])->name('view.home.slider');
});

require __DIR__.'/auth.php';
