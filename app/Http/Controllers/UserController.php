<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // GET ALL USERS
    public function index()
    {
        return response()->json(User::all());
    }

    // GET USER BY ID (+ DAFTAR FAVORIT & PRODUK)
    public function show($id)
    {
        $user = User::with('favorit.product')->find($id);

        if (!$user) {
            return response()->json(['message' => 'User tidak ditemukan'], 404);
        }

        return response()->json($user);
    }

    // CREATE USER (REGISTER)
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:user,email',
            'whatsapp' => 'required',
            'password' => 'required'
        ]);

        $user = User::create($request->all());

        return response()->json([
            'message' => 'User berhasil dibuat',
            'data' => $user
        ]);
    }

    // UPDATE USER
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User tidak ditemukan'], 404);
        }

        $user->update($request->all());

        return response()->json([
            'message' => 'User berhasil diperbarui',
            'data' => $user
        ]);
    }

    // DELETE USER
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User tidak ditemukan'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User berhasil dihapus']);
    }
}
