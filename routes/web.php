<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Models\Property;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

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
});

Route::resource('property',PropertyController::class);
Route::resource('blog',BlogController::class);


Route::get('/getRegencies/{provinceId}', [LocationController::class, 'getRegencies']);
Route::get('/getDistricts/{regencyId}', [LocationController::class, 'getDistricts']);
Route::get('/getVillages/{districtId}', [LocationController::class, 'getVillages']);


require __DIR__.'/auth.php';




Route::get('/', function () {
    return view('user.home');
});

Route::get('/detail', function () {
    return view('user.detail');
});


Route::get('/rumah', function () {
    return view('user.rumah');
});

Route::get('/apartment', function () {
    return view('user.apartment');
});


Route::get('/ruko', function () {
    return view('user.ruko');
});



Route::get('/kavling', function () {
    return view('user.kavling');
});


Route::get('/gudang', function () {
    return view('user.gudang');
});

Route::get('/office', function () {
    return view('user.office');
});


Route::get('/contact', function () {
    return view('user.contact');
});
