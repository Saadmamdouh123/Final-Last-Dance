<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\CalorieCalculatorController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymSessionController;
use App\Http\Controllers\ShowSessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/calorie-calculator', [CalorieCalculatorController::class, 'index'])->name('calorie_calculator.index')->middleware(['auth', 'verified']);
    Route::post('/calorie-calculator', [CalorieCalculatorController::class, 'calculate'])->name('calorie_calculator.calculate')->middleware(['auth', 'verified']);
    Route::post('/trainer/store', [TrainerController::class, 'store'])->name('trainer.store')->middleware(['auth', 'verified']);
    Route::delete('/trainer/destroy/{trainer}', [TrainerController::class, 'destroy'])->name('trainer.destroy')->middleware(['auth', 'verified']);
    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware("Admin");
    Route::delete('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');

    Route::get('/sessions/create', [GymSessionController::class, 'create'])->name('sessions.create');
    Route::post('/sessions', [GymSessionController::class, 'store'])->name('sessions.store');
    Route::get('/showSession', [ShowSessionController::class, 'index'])->name('showSession.store');
    Route::get('/calendar/create', [CalenderController::class, 'create'])->name('calender.create');
    Route::post('/calendar/store', [CalenderController::class, 'store'])->name('calendar.store');
    Route::get('/calendar', [CalenderController::class, 'index'])->name('calendar');


});

require __DIR__.'/auth.php';
