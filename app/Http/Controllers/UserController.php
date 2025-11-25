<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // GET ALL USERS
    public function index()
    {
        // ambil semua user tanpa menampilkan password
        $users = User::all();
        return response()->json($users);
    }

    // GET USER BY ID (+ FAVORIT & PRODUK)
    public function show($id)
    {
        // ambil user beserta daftar favorit dan produk favorit
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
            'email' => 'required|email|unique:users,email',
            'foto_profil' => 'nullable|string',
            'whatsapp' => 'required|size:13',
            'password' => 'required',
            'role' => 'nullable|in:user,admin'
        ]);

        // hash password sebelum disimpan
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        if (!isset($data['role'])) {
            $data['role'] = 'user';
        }

        $user = User::create($data);

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

        $request->validate([
            'fullname' => 'sometimes|required',
            'email' => 'sometimes|required|email|unique:users,email,' . $id . ',id_pelanggan',
            'foto_profil' => 'nullable|string',
            'whatsapp' => 'sometimes|required',
            'password' => 'sometimes|required',
            'role' => 'nullable|in:user,admin'
        ]);

        $data = $request->all();
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);

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
