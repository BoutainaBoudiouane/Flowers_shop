<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Flower;



class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::with('flower')->get();
        $flowers = Flower::all();

        return view('dashboard.OrderPage.order', compact('orders', "flowers"));
    }
    
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'flower_id' => 'required|exists:flowers,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
            'status' => 'required|in:complete,uncomplete',
            'type' => 'required|in:en_ligne,off_ligne',
        ]);

        // Create a new order
        Order::create([
            'flower_id' => $request->flower_id,
            'quantity' => $request->quantity,
            'total_price' => $request->total_price,
            'status' => $request->status,
            'type' => $request->type,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Order added successfully!');
    }

    public function update(Request $request, Order $order)
    {
        // Validate the request data
        $request->validate([
            'flower_id' => 'required|exists:flowers,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
            'status' => 'required|in:complete,uncomplete',
            'type' => 'required|in:en_ligne,off_ligne',
        ]);

        // Update the order
        $order->update([
            'flower_id' => $request->flower_id,
            'quantity' => $request->quantity,
            'total_price' => $request->total_price,
            'status' => $request->status,
            'type' => $request->type,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Order updated successfully!');
    }
    public function destroy($id)
    {

        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->back()->with('success', 'Order deleted successfully!');
    }
}
