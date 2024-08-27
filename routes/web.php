<?php

use App\Models\Property;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\UserPropertyController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\UserBlogController;

  
Route::get('/', [UserDashboardController::class, 'index'])->name('user.dashboard');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('property',PropertyController::class);
    Route::resource('blog',BlogController::class);
    Route::get('/getRegencies/{provinceId}', [LocationController::class, 'getRegencies']);
    Route::get('/getDistricts/{regencyId}', [LocationController::class, 'getDistricts']);
    Route::get('/getVillages/{districtId}', [LocationController::class, 'getVillages']);
    Route::get('/getRegenciesByCategory/{category}', [UserPropertyController::class,'getRegenciesByCategory']);
    Route::get('/properties/{type}', [UserPropertyController::class, 'searchProperties']);
});


Route::resource('userdashboard',UserDashboardController::class);
Route::resource('userproperty',UserPropertyController::class);
Route::get('/properti/rumah', [UserPropertyController::class, 'fetchRumah'])->name('userproperty.fetchrumah');
Route::get('/properti/apartment', [UserPropertyController::class, 'fetchApartment'])->name('userproperty.fetchapartment');
Route::get('/properti/kavling', [UserPropertyController::class, 'fetchKavling'])->name('userproperty.fetchkavling');
Route::get('/properti/gudang', [UserPropertyController::class, 'fetchGudang'])->name('userproperty.fetchgudang');
Route::get('/properti/office', [UserPropertyController::class, 'fetchOffice'])->name('userproperty.fetchoffice');
Route::get('/properti/ruko', [UserPropertyController::class, 'fetchRuko'])->name('userproperty.fetchruko');



Route::resource('blogs',UserBlogController::class);
// web.php (or api.php depending on your routing structure)
// Route::get('/propertis/{propertyType}', [UserPropertyController::class, 'fetchRegencies']);
// routes/web.php
// routes/web.php


// PropertyController.php



// YourController.php












require __DIR__.'/auth.php';








Route::get('/contact', function () {
    return view('user.contact');

});


Route::get('/about', function () {
    return view('user.about-us');
});




Route::get('/blog-detail', function() {
    return view('user.blog-detail');
});

Route::get('/calculator', function() {
    return view('user.calculator');
});

Route::get('/kerjasama', function() {
    return view('user.kerjasama');
});