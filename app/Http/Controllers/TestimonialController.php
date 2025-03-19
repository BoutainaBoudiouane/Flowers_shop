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

    //add testimonial landing page
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Create a new testimonial
        Testimonial::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your testimonial!');
    }

}
