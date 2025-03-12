<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class FlowerController extends Controller
{
    public function index()
    {
        $flowers = Flower::all();

        return view('dashboard.FlowerPage.flower', compact('flowers'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:mini_bouquet,large_bouquet,valentine,wedding,mother,women',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/flowers'), $imageName);
            $imagePath = 'images/flowers/' . $imageName;
        }

        // Create new flower
        $flower = new Flower();
        $flower->name = $validated['name'];
        $flower->type = $validated['type'];
        $flower->price = $validated['price'];
        $flower->description = $validated['description'];
        $flower->image = $imagePath ?? null;
        $flower->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'Flower added successfully!');
    }

    public function update(Request $request, $id)
    {
        // Find the flower
        $flower = Flower::findOrFail($id);

        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:mini_bouquet,large_bouquet,valentine,wedding,mother,women',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($flower->image && File::exists(public_path($flower->image))) {
                File::delete(public_path($flower->image));
            }

            // Upload new image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/flowers'), $imageName);
            $flower->image = 'images/flowers/' . $imageName;
        }

        // Update other fields
        $flower->name = $validated['name'];
        $flower->type = $validated['type'];
        $flower->price = $validated['price'];
        $flower->description = $validated['description'];
        $flower->save();

        return redirect()->back()->with('success', 'Flower updated successfully!');
    }

    public function destroy($id)
    {
        // Find the flower
        $flower = Flower::findOrFail($id);

        // Delete the image file if it exists
        if ($flower->image && File::exists(public_path($flower->image))) {
            File::delete(public_path($flower->image));
        }

        // Delete the flower
        $flower->delete();

        return redirect()->back()->with('success', 'Flower deleted successfully!');
    }
}
