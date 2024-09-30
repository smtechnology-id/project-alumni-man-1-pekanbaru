<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('index');
    }

    public function login() {
        return view('login');
    }

    public function loginPost(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->level == 'admin') {
                return redirect()->route('admin.dashboard');
            }
        }

        return back()->withErrors(['email' => 'These Credentials do not match our records.  ']);
    }


    public function pendataan(Request $request) {
        // Validasi input
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tahun_masuk' => 'required|integer|digits:4',
            'jenis_kelamin' => 'required|string',
            'tahun_lulus' => 'required|integer|digits:4',
            'provinsi' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'desa' => 'required|string',
            'no_hp' => 'required|string',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'pendidikan_terakhir' => 'required|string',
            'kuliah' => 'required|string',
            'bekerja' => 'required|string',
            'berkeluarga' => 'required|string',
            'menganggur' => 'required|string',
            'jenis_perguruan_tinggi' => 'nullable|string',
            'tahun_masuk_perguruan_tinggi' => 'nullable|integer|digits:4',
            'nama_perguruan_tinggi' => 'nullable|string',
            'program_studi' => 'nullable|string',
            'jenis_pekerjaan' => 'nullable|string',
            'nama_perusahaan' => 'nullable|string',
            'jabatan' => 'nullable|string',
        ]);
    
        // Simpan data ke database
        Dataset::create($validatedData);
    
        // Redirect atau return response
        return redirect()->route('index')->with('success', 'Terimakasih, Data berhasil disimpan.');
    }
}
