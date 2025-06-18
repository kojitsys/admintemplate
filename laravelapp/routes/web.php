<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::inertia('/forms', 'Admin/Forms')->name('forms');
    Route::inertia('/calendar', 'Admin/Calendar')->name('calendar');
    Route::inertia('/lists', 'Admin/Lists')->name('lists');
    Route::inertia('/cards', 'Admin/Cards')->name('cards');
    Route::inertia('/gantt', 'Admin/Gantt')->name('gantt');
    Route::inertia('/kanban', 'Admin/Kanban')->name('kanban');
});

require __DIR__.'/auth.php';
