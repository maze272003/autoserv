<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProcessController;


// Public Routes
Route::get('/', function () {
    return view('client.index');
});

// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [BookingController::class, 'showDashboard'])->name('dashboard');

    // Booking Routes
    Route::delete('/booking/{id}', [BookingController::class, 'destroy'])->name('booking.destroy');
    Route::get('/booking/{id}/edit', [BookingController::class, 'edit'])->name('booking.edit');
    Route::put('/booking/{id}', [BookingController::class, 'update'])->name('booking.update');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/booking/{id}/edit', [BookingController::class, 'edit'])->name('booking.edit');



    // Sidebar Link Routes
    Route::view('/book', 'book')->name('book');
    Route::view('/maintenance', 'maintenance')->name('maintenance');
    Route::view('/notification', 'notification')->name('notification');
    Route::view('/payment', 'payment')->name('payment');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin Dashboard
    Route::get('admin/dashboard', [RoleController::class, 'index'])->name('admin.dashboard');

    // Admin Pages
    Route::get('/admin/users', [AdminDashboardController::class, 'showUsers'])->name('admin.users');
    Route::view('admin/tables', 'admin.tables')->name('admin.tables');
    Route::view('/admin/process', 'admin.process')->name('admin.process');
    Route::view('/admin/done-car', 'admin.done-car')->name('admin.done-car');
    Route::get('/admin/users', [AdminDashboardController::class, 'showUsers'])->name('admin.users');

    Route::get('/user-statistics', [AdminDashboardController::class, 'showUserStatistics'])->name('user.statistics');

});

// Auth Routes
require __DIR__ . '/auth.php';

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/bookings', [BookingController::class, 'index'])->name('admin.bookings.index');
        Route::post('/process-booking/{id}', [ProcessController::class, 'process'])->name('admin.process.booking');
    });











