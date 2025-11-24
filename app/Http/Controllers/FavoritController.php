<?php

namespace App\Http\Controllers;

use App\Models\Favorit;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    // GET FAVORIT PER USER (+ PRODUK)
    public function byUser($id_pelanggan)
    {
        $data = Favorit::with('product')
                ->where('id_pelanggan', $id_pelanggan)
                ->get();

        return response()->json($data);
    }

    // GET ALL FAVORIT (if needed)
    public function index()
    {
        return response()->json(
            Favorit::with(['user', 'product'])->get()
        );
    }

    // ADD FAVORIT
    public function store(Request $request)
    {
        $request->validate([
            'id_pelanggan' => 'required|exists:user,id_pelanggan',
            'products_id' => 'required|exists:products,id'
        ]);

        // Mencegah duplikat favorit (unique constraint)
        $exists = Favorit::where('id_pelanggan', $request->id_pelanggan)
                         ->where('products_id', $request->products_id)
                         ->exists();

        if ($exists) {
            return response()->json([
                'message' => 'Produk sudah ada di favorit!'
            ], 409);
        }

        $fav = Favorit::create($request->all());

        return response()->json([
            'message' => 'Berhasil ditambahkan ke favorit',
            'data' => $fav
        ]);
    }

    // HAPUS FAVORIT BY ID
    public function destroy($id)
    {
        $fav = Favorit::find($id);

        if (!$fav) {
            return response()->json(['message' => 'Data favorit tidak ditemukan'], 404);
        }

        $fav->delete();

        return response()->json([
            'message' => 'Berhasil dihapus dari favorit'
        ]);
    }

    // OPTIONAL: Hapus favorit berdasarkan user + product
    public function deleteByProduct(Request $request)
    {
        $fav = Favorit::where('id_pelanggan', $request->id_pelanggan)
                      ->where('products_id', $request->products_id)
                      ->first();

        if (!$fav) {
            return response()->json(['message' => 'Data favorit tidak ditemukan'], 404);
        }

        $fav->delete();

        return response()->json([
            'message' => 'Berhasil dihapus dari favorit'
        ]);
    }
}
