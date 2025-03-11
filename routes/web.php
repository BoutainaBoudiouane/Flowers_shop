<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\FlowerController;

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
Route::get('/flowers',[FlowerController::class, 'index'] )->name('flower');
Route::post('/flowers',[FlowerController::class, 'store'] );









//Order section
Route::get('/orders', function () {
    return view('dashboard.FlowerPage.flower');
})->name('orders');

//Employee section
Route::get('/employees', function () {
    return view('dashboard.FlowerPage.flower');
})->name('employees');

//Testimonial section
Route::get('/testimonials', function () {
    return view('dashboard.FlowerPage.flower');
})->name('testimonials');