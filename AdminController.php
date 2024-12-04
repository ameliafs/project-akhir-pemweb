<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Paket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //Karyawan
    public function indexKaryawan()
{
    $karyawan = Karyawan::all();
    return view('admin.karyawan.index', compact('karyawan'));
}

public function createKaryawan()
{
    return view('admin.karyawan.create');
}

public function storeKaryawan(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:karyawan',
        'nomor telepon' => 'required',
        'jabatan' => 'required',
    ]);

    Karyawan::create($request->all());
    return redirect()->route('admin.karyawan.index')->with('success', 'Karyawan berhasil ditambahkan!');
}

// Tambahkan fungsi edit, update, dan delete sesuai kebutuhan.

    //Paket
    public function indexPaket()
{
    $paket = Paket::all();
    return view('admin.paket.index', compact('paket'));
}

public function createPaket()
{
    return view('admin.paket.create');
}

public function storePaket(Request $request)
{
    $request->validate([
        'nomor_resi' => 'required|unique:paket',
        'pengirim' => 'required|string',
        'penerima' => 'required|string',
        'status' => 'required|in:masuk,keluar',
    ]);

    Paket::create($request->all());
    return redirect()->route('admin.paket.index')->with('success', 'Paket berhasil ditambahkan!');
    }

    //Statistik Paket
public function dashboard()
{
    $hari = now()->startOfDay();
    $bulan = now()->startOfMonth();
    $tahun = now()->startOfYear();

    $status = [
        'hari' => Paket::whereDate('created_at', $hari)->count(),
        'bulan' => Paket::whereBetween('created_at', [$bulan, now()])->count(),
        'tahun' => Paket::whereBetween('created_at', [$tahun, now()])->count(),
    ];

    return view('admin.dashboard', compact('status'));
    }
}