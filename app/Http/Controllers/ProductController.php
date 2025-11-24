<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET ALL
    public function index()
    {
        return response()->json(Product::all());
    }

    // GET BY ID
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        return response()->json($product);
    }

    // CREATE (POST)
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'price'     => 'required|numeric',
            'brand'     => 'nullable|string',
            'image'     => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'warna'     => 'nullable',
            'ukuran'    => 'nullable',
            'rating'    => 'nullable|numeric',
            'stok'      => 'required|numeric'
        ]);

        $product = Product::create($request->all());

        return response()->json([
            'message' => 'Product berhasil dibuat',
            'data'    => $product
        ]);
    }

    // UPDATE (PUT/PATCH)
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->update($request->all());

        return response()->json([
            'message' => 'Product berhasil diupdate',
            'data' => $product
        ]);
    }

    // DELETE
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();

        return response()->json([
            'message' => 'Product berhasil dihapus'
        ]);
    }
}
