<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
        // GET ALL
    public function index()
    {
        return response()->json(Order::all());
    }

    // GET BY ID
    public function show($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return response()->json($order);
    }

    // CREATE (POST)
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan'    => 'required|string|max:100',
            'email'             => 'required|email|max:100',
            'total'             => 'required|numeric',
            'status'            => 'required|string|max:20',
            'metode_pembayaran' => 'required|string|max:20',
            'tanggal'           => 'nullable|date'
        ]);

        $order = Order::create($request->all());

        return response()->json([
            'message' => 'Order berhasil dibuat',
            'data'    => $order
        ]);
    }

    // UPDATE (PUT/PATCH)
    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $order->update($request->all());

        return response()->json([
            'message' => 'Order berhasil diupdate',
            'data'    => $order
        ]);
    }

    // DELETE
    public function destroy($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        $order->delete();

        return response()->json([
            'message' => 'Order berhasil dihapus'
        ]);
    }
}
