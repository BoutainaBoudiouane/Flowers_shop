<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Flower;
use App\Models\Order;
use App\Models\Testimonial;



class DashboardController extends Controller
{
    //
    public function index(){
        $flowerscount = Flower::all()->count();
        $orderscount = Order::all()->count();
        $employeescount = Employee::all()->count();
        $testimonialscount = Testimonial::all()->count();
        $miniflower = Flower::where('type','mini_bouquet')->count();
        $largeflower = Flower::where('type','large_bouquet')->count();
        $valentineflower = Flower::where('type','valentine')->count();
        $weddingflower = Flower::where('type','wedding')->count();
        $motherflower = Flower::where('type','mother')->count();
        $womenflower = Flower::where('type','women')->count();
   
        return view('dashboard.index', compact('flowerscount', 'orderscount', 'employeescount', 'testimonialscount', 'miniflower',
    'largeflower', 'valentineflower', 'weddingflower', 'motherflower', 'womenflower'));
    }

}
