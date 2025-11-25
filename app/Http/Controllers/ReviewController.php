<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
     // GET ALL
    public function index()
    {
        return response()->json(Review::all());
    }

    // GET BY ID
    public function show($id)
    {
        $review = Review::find($id);

        if (!$review) {
            return response()->json(['message' => 'Review not found'], 404);
        }

        return response()->json($review);
    }

    // CREATE (POST)
    public function store(Request $request)
    {
        $request->validate([
            'product_id'     => 'required|numeric',
            'id_pelanggan'   => 'required|numeric',
            'rating'         => 'required|numeric|min:1|max:5',
            'comment'        => 'nullable|string',
            'nama_pelanggan' => 'nullable|string|max:50'
        ]);

        $review = Review::create($request->all());

        return response()->json([
            'message' => 'Review berhasil dibuat',
            'data'    => $review
        ]);
    }

    // UPDATE (PUT/PATCH)
    public function update(Request $request, $id)
    {
        $review = Review::find($id);

        if (!$review) {
            return response()->json(['message' => 'Review not found'], 404);
        }

        $review->update($request->all());

        return response()->json([
            'message' => 'Review berhasil diupdate',
            'data'    => $review
        ]);
    }

    // DELETE
    public function destroy($id)
    {
        $review = Review::find($id);

        if (!$review) {
            return response()->json(['message' => 'Review not found'], 404);
        }

        $review->delete();

        return response()->json([
            'message' => 'Review berhasil dihapus'
        ]);
    }
}
