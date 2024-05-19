<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FullyFundedPremium;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('fully-funded-premium.index');
        }

        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string',
            'domisili' => 'required|string',
            'instansi' => 'required|string',
            'nomor_whatsapp' => 'required|string',
            'username_instagram' => 'required|string',
            'alasan_mengikuti' => 'required|string',
            'divisi' => 'required|string',
            'alasan_divisi' => 'required|string',
            'riwayat_penyakit' => 'nullable|string',
            'kondisi_lapangan' => 'nullable|string',
        ]);

        FullyFundedPremium::create($request->all());

        // Redirect atau beri respons sesuai kebutuhan
        return redirect()->route('home')->with('success', 'Data berhasil disimpan');
    }
}

