<?php

namespace App\Http\Controllers;

use App\Models\PenyimpananBarang;
use Illuminate\Http\Request;

class PenyimpananBarangController extends Controller
{
    public function index()
    {
        $penyimpanans = PenyimpananBarang::all();
        return view('welcome', compact('penyimpanans'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        PenyimpananBarang::create([
            'nama_barang' => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'stok_tersedia' => $request->stok_tersedia,
            'harga_satuan' => $request->harga_satuan,
            'kategori' => $request->kategori,
        ]);

        session()->flash('success', 'Barang baru berhasil ditambahkan!');

        return redirect('/');
    }
}
