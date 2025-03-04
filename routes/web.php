<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResidentController;
use App\Models\Officer;
use App\Models\Resident;
use Illuminate\Auth\Events\Verified;
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

    return view('dashboard',[
        'population' => $officers->merge($residents),
        'officers' => $officers,
        'females' => $residents->where('sex', 'female')
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

// officers
Route::get('/officers', [OfficerController::class, 'index'])->middleware(['auth', 'verified'])->name('officers');

// officer
Route::get('/officer/{id}', [OfficerController::class, 'show'])->middleware(['auth', 'verified'])->name('officer.show');

//  officer form
Route::get('/officers/add', [OfficerController::class, 'create'])->middleware(['auth', 'verified'])->name('create-officer');

// add officer
Route::post('/add-officer', [OfficerController::class, 'store'])->middleware(['auth', 'verified'])->name('add-officer');

// officer updateForm
Route::get('/officers/{id}/edit', [OfficerController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit-officer');

// update officer
Route::put('/officers/{id}', [OfficerController::class, 'update'])->middleware(['auth', 'verified'])->name('update-officer');

// delete officer
Route::delete("/officers/{id}", [OfficerController::class, 'destroy'])->middleware(['auth', 'verified'])->name('delete-officer');


Route::get('/documents', [DocumentController::class, 'index'])->middleware(['auth', 'verified'])->name('documents');
// Route::get('/documents/{id}', [DocumentController::class, 'show'])->middleware(['auth', 'verified'])->name('documents.show');
Route::get('/documents/{id}', [DocumentController::class, 'show'])->middleware(['auth', 'verified'])->name('documents.show');
Route::get('/document/create', [DocumentController::class, 'create'])->middleware(['auth', 'verified'])->name('documents.create');
Route::post('/documents', [DocumentController::class, 'store'])->middleware(['auth', 'verified'])->name('documents.store');

// calendar 
Route::get("/calendar", [EventController::class, 'index'])->middleware(['auth', 'verified'])->name('calendar');
Route::post('/calendar/add', [EventController::class, 'store'])->middleware(['auth', 'verified'])->name('addEventCalendar');
Route::get('/get-events', [EventController::class, 'getEvents'])->middleware(['auth', 'verified'])->name('getEvents');
Route::get("/calendar/{id}/edit", [EventController::class, 'edit'])->middleware(['auth', 'verified'])->name('editCalendarEvent');
Route::put("/calendar/{id}", [EventController::class, 'update'])->middleware(['auth', 'verified'])->name('updateCalendarEvent');
Route::delete("/calendar/{id}", [EventController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteCalendarEvent');


Route::get("/test", function () {
    return view('test');
});


 
// logs
Route::get("/logs", [LogController::class, 'index'])->middleware(['auth', 'verified'])->name('logs');
Route::delete("/logs", [LogController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteLogs');



// residents
Route::get('/add-resident', [ResidentController::class, 'create'])->middleware(['auth', 'verified'])->name('add-resident');
Route::post('/add-resident', [ResidentController::class, 'store'])->middleware(['auth', 'verified'])->name('add-resident');
Route::get('/residents', [ResidentController::class, 'index'])->middleware(['auth', 'verified'])->name('residents');
Route::get('/residents/{resident}', [ResidentController::class, 'show'])->middleware(['auth', 'verified'])->name('show-resident');
Route::get('/resident/{resident}/edit', [ResidentController::class, 'edit'])->middleware(['auth', 'verified'])->name('editResident');
Route::put('/resident/{resident}', [ResidentController::class, 'update'])->middleware(['auth', 'verified'])->name('updateResident');
Route::get('/info', function () {
    return view('resident-information');
})->middleware(['auth', 'verified'])->name('resident-information');


Route::delete('/resident/{id}', [ResidentController::class, 'destroy'])->middleware(['auth', 'verified'])->name('deleteResident');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
