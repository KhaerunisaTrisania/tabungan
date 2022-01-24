<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use App\Models\DataTabungan;
use App\Models\HistoryPembayaran;
use Illuminate\Http\Request;

class dataTabunganController extends Controller
{
    public function index()
    {
        $tabungan = DataAnggota::with('DataTabungan')->get();
        return view('dataTabungan.index', compact('tabungan'));
    }

    public function inputTabungan(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required',
            'jumlah_pemasukan' => 'required',
        ]);
        $tabungan = DataTabungan::where('anggota_id', $request->anggota_id)->first();
        $jumlah = $tabungan->jumlah_tabungan + $request->jumlah_pemasukan;

        $tabungan->update(['jumlah_tabungan' => $jumlah]);
        HistoryPembayaran::create($request->all());
        return redirect('/dataTabungan')->with('success', 'Tabungan berhasil dimasukan');
    }
}