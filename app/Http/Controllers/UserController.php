<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        // Mengambil semua data user dari database
        $semuaPetugas = User::all(); 
        
        // Kirim data ke halaman admin
        return view('admin.petugas_list', compact('semuaPetugas'));
    }
}
