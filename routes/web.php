<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TestimonialController;



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

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

//Flower section
Route::get('/flowers',[FlowerController::class, 'index'])->name('flower');
Route::post('/flowers',[FlowerController::class, 'store'])->name('flower.store');
Route::get('/flowers/{flower}/edit', [FlowerController::class, 'edit'])->name('flower.edit');
Route::put('/flowers/{flower}', [FlowerController::class, 'update'])->name('flower.update');
Route::delete('/flowers/{flower}', [FlowerController::class, 'destroy'])->name('flower.destroy');


//Employee section
Route::get('/employees',[EmployeeController::class, 'index'])->name('employee');



//Testimonial section
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial');
Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');





//Order section
Route::get('/orders', [FlowerController::class, 'index'])->name('orders');



