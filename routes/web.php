<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/officers', function () {
    return view('officers');
})->middleware(['auth', 'verified'])->name('officers');

Route::get('/residents', function () {
    return view('residents');
})->middleware(['auth', 'verified'])->name('residents');

Route::get('/documents', function () {
    return view('documents');
})->middleware(['auth', 'verified'])->name('documents');

Route::get('/calendar', function () {
    return view('calendar');
})->middleware(['auth', 'verified'])->name('calendar');

Route::get('/logs', function () {
    return view('logs');
})->middleware(['auth', 'verified'])->name('logs');

Route::get('/info', function () {
    return view('resident-information');
})->middleware(['auth', 'verified'])->name('resident-information');

Route::get('/add-resident', function () {
    return view('add-resident');
})->middleware(['auth', 'verified'])->name('add-resident');

Route::get('/add-officer', function () {
    return view('add-officer');
})->middleware(['auth', 'verified'])->name('add-officer');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // auth

});

require __DIR__.'/auth.php';
