<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\Testimonial;


class LandingPageController extends Controller
{
    //
    public function index()
    {
        // Fetch all flowers from the database
        $flowers = Flower::take(6)->get();
        $testimonials = Testimonial::all();

        // Pass the flowers data to the view
        return view('landingPage.index', compact('flowers','testimonials'));
    }

    public function loadMore(Request $request)
    {
        $page = $request->input('page', 2); // Start from page 2 after initial load
        $offset = 6 + (($page - 2) * 3); // Calculate offset

        $flowers = Flower::skip($offset)
                        ->take(3)
                        ->get();

        return view('landingPage.partials', compact('flowers'))->render();
    }

   
}
