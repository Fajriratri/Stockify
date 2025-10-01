<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash; 

class UserController extends Controller
{
    // Menampilkan semua user dengan Paginasi
    public function index()
    {
        // Menggunakan paginate(10) untuk performa yang lebih baik
        $users = User::paginate(10); 

        return view('pages.admin.user_list', compact('users'));
    }

    public function create()
    {
        return view('pages.admin.user_create');
    }

    public function store(Request $request)
    {
        // Validasi Request untuk pembuatan user baru
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users', 
            // Password wajib, minimal 8 karakter, dan harus dikonfirmasi
            'password' => 'required|string|min:8|confirmed', 
            // Role harus salah satu dari nilai yang diizinkan (sesuai database: admin, manager, staff)
            'role'     => ['required', Rule::in(['Admin', 'Manajer Gudang', 'Staff Gudang'])], 
        ]);

        // Simpan user baru
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password), 
            'role'     => $request->role,
        ]);

        return redirect()->route('admin.users')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    // Menggunakan Model Binding untuk menghindari findOrFail() manual
    public function edit(User $user)
    {
        return view('pages.admin.user_edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        // Validasi Request untuk update user
        $request->validate([
            'name'     => 'required|string|max:255',
            // Email harus unik, tetapi abaikan email user ini
            'email'    => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            // Password opsional (nullable), tetapi jika diisi, harus dikonfirmasi
            'password' => 'nullable|string|min:8|confirmed',
            'role'     => ['required', Rule::in(['Admin', 'Manajer Gudang', 'Staff Gudang'])],
        ]);
        
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->role  = $request->role;

        // Periksa apakah field password diisi. Jika diisi, update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        
        $user->save();

        return redirect()->route('admin.users')->with('success', 'Pengguna berhasil diperbarui.');
    }

    // Menggunakan Model Binding untuk menghapus user
    public function destroy(User $user)
    {
        // Pengecekan agar user tidak bisa menghapus dirinya sendiri
        if (auth()->check() && auth()->id() == $user->id) {
            return redirect()->route('admin.users')->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        }

        $user->delete();

        return redirect()->route('admin.users')->with('success', 'Pengguna berhasil dihapus.');
    }
}
