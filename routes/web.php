<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\ResidentDocumentController;
use App\Http\Controllers\ResidentStatusController;
use App\Http\Controllers\UserController;
use App\Models\Officer;
use App\Models\Resident;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', function () {
    $officers = Officer::all();

    $residents = Resident::all();

    return view('dashboard', [
        'population' => $officers->merge($residents),
        'officers' => $officers,
        'females' => $residents->where('sex', 'female')
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->controller(OfficerController::class)->group(function () {
    Route::get('/officers', 'index')->name('officers');
    Route::get('/officers/add', 'create')->name('create-officer');
    Route::post('/add-officer', 'store')->name('add-officer');
    Route::get('/officers/{id}/edit', 'edit')->name('edit-officer');
    Route::put('/officers/{id}', 'update')->name('update-officer');
    Route::delete('/officers/{id}', 'destroy')->name('delete-officer');
});

Route::get("/calendar", [EventController::class, 'index'])->middleware(['auth', 'verified'])->name('calendar');
Route::post('/calendar/add', [EventController::class, 'store'])->middleware(['auth', 'verified'])->name('addEventCalendar');
Route::get('/get-events', [EventController::class, 'getEvents'])->middleware(['auth', 'verified'])->name('getEvents');
Route::get("/calendar/{id}/edit", [EventController::class, 'edit'])->middleware(['auth', 'verified'])->name('editCalendarEvent');
Route::put("/calendar/{id}", [EventController::class, 'update'])->middleware(['auth', 'verified'])->name('updateCalendarEvent');
Route::delete("/calendar/{id}", [EventController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteCalendarEvent');

Route::get("/logs", [LogController::class, 'index'])->middleware(['auth', 'verified'])->name('logs');
Route::delete("/logs", [LogController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteLogs');

Route::get('/info', function () {
    return view('resident-information');
})->middleware(['auth', 'verified'])->name('resident-information');

Route::middleware(['auth'])->controller(ResidentController::class)->group(function () {
    Route::get('/residents', 'index')->name('residents.index');
    Route::get('/residents/create', 'create')->name('residents.create');
    Route::post('/residents', 'store')->name('residents.store');
    Route::get('/residents/{resident}', 'show')->name('residents.show');
    Route::get('/residents/{resident}/edit', 'edit')->name('residents.edit');
    Route::put('/residents/{resident}', 'update')->name('residents.update');
    Route::delete('/residents/{resident}', 'destroy')->name('residents.destroy');
});

Route::put('/residents/{resident}/status', [ResidentStatusController::class, 'update'])
    ->middleware('auth')->name('residents.status.update');

Route::middleware(['auth'])->controller(ResidentDocumentController::class)->group(function () {
    Route::post('/residents/{resident}/documents', 'store')->name('residents.documents.store');
    Route::delete('/residents/{resident}/documents/{document}', 'destroy')->name('resident.documents.destroy');
});

Route::middleware(['auth'])->controller(DocumentController::class)->group(function () {
    Route::get('/documents', 'index')->name('documents.index');
    Route::post('/documents', 'store')->name('documents.store');
    Route::delete('/documents', 'destroy')->name('documents.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// users

Route::get('/users', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('user.index');
Route::post('/users/add', [UserController::class, 'store'])->middleware(['auth', 'verified'])->name('user.store');
Route::put('/users/{id}/update', [UserController::class, 'update'])->middleware(['auth', 'verified'])->name('user.update');
Route::delete('/users/{id}/delete', [UserController::class, 'destroy'])->middleware(['auth', 'verified'])->name('user.destroy');

require __DIR__ . '/auth.php';
