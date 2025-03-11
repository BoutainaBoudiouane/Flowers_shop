<?php
 
namespace App\Http\Controllers\dashboard;
 
use App\Models\Flower;
use Illuminate\View\View;
use Illuminate\Routing\Controller ;
 
class FlowerController extends Controller
{
    public function index(){
        $flowers= Flower::all();

        return view('dashboard.FlowerPage.flower',compact('flowers'));

    }





}