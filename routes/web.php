<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\WorkExperienceController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', [PortfolioController::class, 'index'])->name('index');
Route::get('/about/page', [PortfolioController::class, 'aboutPage'])->name('about.page');

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

    // ABOUT
    Route::get('/view/about/slider', [AboutController::class, 'viewAboutSlider'])->name('view.about.slider');
    Route::post('/update/about/slider', [AboutController::class, 'updateAboutSlider'])->name('update.about.slider');

    // CLIENTS
    Route::get('/view/work/experience', [WorkExperienceController::class, 'viewWorkExperience'])->name('view.work.experience');
    Route::get('/form/add/work/experience', [WorkExperienceController::class, 'addFormWorkExperience'])->name('form.add.work.experience');
    Route::post('/store/work/experience', [WorkExperienceController::class, 'storeWorkExperience'])->name('store.work.experience');
    Route::get('/form/edit/work/experience/{id}', [WorkExperienceController::class, 'editFormWorkExperience'])->name('form.edit.work.experience');
    Route::put('/update/work/experience/{id}', [WorkExperienceController::class, 'updateWorkExperience'])->name('update.work.experience');
    Route::delete('/delete/work/experience', [WorkExperienceController::class, 'deleteWorkExperience'])->name('delete.work.experience');
});

require __DIR__.'/auth.php';
