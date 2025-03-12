<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('dashboard.TestimonialPage.testimonial', compact('testimonials'));
    }

    public function destroy($id)
    {
        
        $testimonial = Testimonial::findOrFail($id);

        $testimonial->delete();

        return redirect()->back()->with('success', 'Testimonial deleted successfully!');
    }
}
