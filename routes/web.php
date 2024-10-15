<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\ShowProcessController;
use App\Http\Controllers\ClientPartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\RatingController; // Include the RatingController

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

    // Sidebar Link Routes
    Route::view('/book', 'book')->name('book');
    Route::view('/maintenance', 'maintenance')->name('maintenance');
    Route::view('/notification', 'notification')->name('notification');
    Route::view('/payment', 'payment')->name('payment');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/parts/decline/{id}', [ClientPartController::class, 'decline'])->name('parts.decline');

    // Customer Support Routes
    Route::get('/customer-support', [MessageController::class, 'showForm'])->name('customer.support');
    Route::post('/customer-support', [MessageController::class, 'store'])->name('customer.support.store');

    // Rating Routes
    Route::view('/ratings', 'ratings')->name('ratings'); // View to show the rating form
    Route::post('/ratings/store', [RatingController::class, 'store'])->name('ratings.store'); // Store rating
});

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin Dashboard
    Route::get('admin/dashboard', [RoleController::class, 'index'])->name('admin.dashboard');

    // Admin User Management
    Route::get('/admin/users', [AdminDashboardController::class, 'showUsers'])->name('admin.users');

    // Admin Pages
    Route::view('admin/tables', 'admin.tables')->name('admin.tables');
    Route::view('/admin/process', 'admin.process')->name('admin.process');
    Route::view('/admin/done-car', 'admin.done-car')->name('admin.done-car');

    // User Statistics
    Route::get('/user-statistics', [AdminDashboardController::class, 'showUserStatistics'])->name('user.statistics');

    // Parts Management
    Route::get('/admin/createparts', [PartController::class, 'create'])->name('admin.createparts');
    Route::post('/admin/storeparts', [PartController::class, 'store'])->name('parts.store');
    Route::resource('parts', PartController::class);

    // Inprocess Management
    Route::get('/admin/inprocess', [ShowProcessController::class, 'index'])->name('admin.inprocess');
    Route::post('/client/parts/store', [ClientPartController::class, 'store'])->name('client.parts.store');
    Route::put('/process/{id}/done', [ProcessController::class, 'markAsDone'])->name('process.done');

    // Client Parts Store
    Route::post('/process/{id}/done', [ProcessController::class, 'markAsDone'])->name('process.done');
    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
});

// Auth Routes
require __DIR__ . '/auth.php';

// Additional Admin Booking Management
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/bookings', [BookingController::class, 'index'])->name('admin.bookings.index');
    Route::post('/process-booking/{id}', [ProcessController::class, 'process'])->name('admin.process.booking');
});
