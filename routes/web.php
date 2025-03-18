<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingPage.index');
});

//dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Flower section
    Route::get('/flowers', [FlowerController::class, 'index'])->name('flower');
    Route::post('/flowers', [FlowerController::class, 'store'])->name('flower.store');
    Route::put('/flowers/{flower}', [FlowerController::class, 'update'])->name('flower.update');
    Route::delete('/flowers/{flower}', [FlowerController::class, 'destroy'])->name('flower.destroy');

    //Order section
    Route::get('/orders', [OrderController::class, 'index'])->name('order');
    Route::post('/orders', [OrderController::class, 'store'])->name('order.store');
    Route::put('/orders/{order}', [OrderController::class, 'update'])->name('order.update');
    Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('order.destroy');

    //Employee section
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employee');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employee.store');
    Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');

    //Testimonial section
    Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial');
    Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
});


require __DIR__ . '/auth.php';
