<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\PropertyController;
use App\Models\Property;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\User\UserDashboardController;

Route::get('/', function () {
    return view('welcome');
});

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
});


Route::resource('userdashboard',UserDashboardController::class);








require __DIR__.'/auth.php';




Route::get('/', function () {
    return view('user.home');
});
