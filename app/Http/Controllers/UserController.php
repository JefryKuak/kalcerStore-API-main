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
        $users = User::all();
        return response()->json($users);
    }

    // GET USER BY ID (+ FAVORIT jika ada relasi nanti)
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User tidak ditemukan'], 404);
        }

        return response()->json($user);
    }

    // CREATE USER (REGISTER)
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email',
            'whatsapp' => 'required|size:13',
            'password' => 'required|string|min:6',
            'foto_profil' => 'nullable|string',
            'role' => 'nullable|in:user,admin'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['role'] = $data['role'] ?? 'user';


        $user = User::create($data);
        dd($data, $user);

        return response()->json([
            'message' => 'User berhasil dibuat',
            'data' => $user
        ], 201);
    }

    // UPDATE USER
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User tidak ditemukan'], 404);
        }

        $request->validate([
            'fullname' => 'sometimes|required|string|max:50',
            'email' => 'sometimes|required|email|unique:users,email,' . $id . ',id_pelanggan',
            'whatsapp' => 'sometimes|required|size:13',
            'password' => 'sometimes|required|string|min:6',
            'foto_profil' => 'nullable|string',
            'role' => 'nullable|in:user,admin'
        ]);

        $data = $request->all();
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);
        $user->refresh();

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
