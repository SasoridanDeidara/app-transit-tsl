<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SatwaMasuk;
use App\Models\SatwaKeluar;

class SatwaController extends Controller
{

    public function index()
    {
        $satwa_masuk = SatwaMasuk::all();
        $satwa_keluar = SatwaKeluar::all();
        return view('satwa.index', compact('satwa_masuk', 'satwa_keluar'));
    }

    public function create()
    {
        return view('satwa.create');
    }

    public function store(Request $request)
    {
        // validasi form
        $request->validate([
            'nama_satwa' => 'required',
            'kategori' => 'required',
            'tgl_masuk' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan' => 'required',
        ]);

        // upload foto ke storage
        $imageName = time() . '.' . $request->foto->extension();
        $request->foto->storeAs('public', $imageName);

        // buat data satwa_masuk baru
        SatwaMasuk::create([
            'nama_satwa' => $request->nama_satwa,
            'kategori' => $request->kategori,
            'tgl_masuk' => $request->tgl_masuk,
            'foto' => $imageName,
            'keterangan' => $request->keterangan,
        ]);

        // redirect ke halaman utama dengan pesan sukses
        return redirect()->route('satwa.index')->with('success', 'Data satwa berhasil ditambahkan.');
    }

}
