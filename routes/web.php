<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AdminContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/careers', [FrontendController::class, 'careers'])->name('careers');
Route::get('/careers/details/{slug}', [FrontendController::class, 'careerDetails'])->name('careers.details');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::group(['prefix' => '/services'], function () {
    Route::get('/', [FrontendController::class, 'services'])->name('services');
    Route::get('/details/{id}', [FrontendController::class, 'servicesDetails'])->name('services.details');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => '/services'], function () {
        Route::get('/index', [ServicesController::class, 'index'])->name('services.index');
        Route::get('/create', [ServicesController::class, 'create'])->name('services.create');
        Route::post('/store', [ServicesController::class, 'store'])->name('services.store');
        Route::get('/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
        Route::post('/update/{id}', [ServicesController::class, 'update'])->name('services.update');
        Route::delete('/destroy/{id}', [ServicesController::class, 'destroy'])->name('services.destroy');
        Route::delete('/gallery/delete/{id}', [ServicesController::class, 'deleteGalleryImage'])->name('services.gallery.delete');
        Route::delete('/faq/delete/{id}', [ServicesController::class, 'deleteFaq'])->name('services.faq.delete');
    });

    Route::group(['prefix' => '/careers'], function () {
        Route::get('/index', [CareerController::class, 'index'])->name('careers.index');
        Route::get('/create', [CareerController::class, 'create'])->name('careers.create');
        Route::post('/store', [CareerController::class, 'store'])->name('careers.store');
        Route::get('/edit/{id}', [CareerController::class, 'edit'])->name('careers.edit');
        Route::post('/update/{id}', [CareerController::class, 'update'])->name('careers.update');
        Route::delete('/destroy/{id}', [CareerController::class, 'destroy'])->name('careers.destroy');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => '/contacts'], function () {
        Route::get('/index', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::get('/show/{id}', [AdminContactController::class, 'show'])->name('contacts.show');
        Route::get('/{id}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
    });
});

require __DIR__.'/auth.php';
