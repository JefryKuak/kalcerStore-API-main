<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
     // GET ALL
    public function index()
    {
        return response()->json(OrderDetail::all());
    }

    // GET BY ID
    public function show($id)
    {
        $detail = OrderDetail::find($id);

        if (!$detail) {
            return response()->json(['message' => 'Order detail not found'], 404);
        }

        return response()->json($detail);
    }

    // CREATE
    public function store(Request $request)
    {
        $request->validate([
            'id_order'     => 'required|numeric',
            'id_produk'    => 'required|numeric',
            'nama_produk'  => 'required|string',
            'brand'        => 'nullable|string',
            'warna'        => 'nullable|string',
            'ukuran'       => 'nullable|string',
            'qty'          => 'required|numeric',
            'harga'        => 'required|numeric',
            'subtotal'     => 'required|numeric'
        ]);

        $detail = OrderDetail::create($request->all());

        return response()->json([
            'message' => 'Order detail berhasil dibuat',
            'data' => $detail
        ]);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $detail = OrderDetail::find($id);

        if (!$detail) {
            return response()->json(['message' => 'Order detail not found'], 404);
        }

        $detail->update($request->all());

        return response()->json([
            'message' => 'Order detail berhasil diupdate',
            'data' => $detail
        ]);
    }

    // DELETE
    public function destroy($id)
    {
        $detail = OrderDetail::find($id);

        if (!$detail) {
            return response()->json(['message' => 'Order detail not found'], 404);
        }

        $detail->delete();

        return response()->json([
            'message' => 'Order detail berhasil dihapus'
        ]);
    }
}
