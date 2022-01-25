<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use App\Models\DataTabungan;
use Illuminate\Http\Request;
use App\Models\HistoryPenarikan;
use App\Models\HistoryPembayaran;

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

    public function ambilTabungan(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required',
            'jumlah_penarikan' => 'required',
        ]);
        $tabungan = DataTabungan::where('anggota_id', $request->anggota_id)->first();
        if ($tabungan->jumlah_tabungan < $request->jumlah_penarikan) {
            return redirect('/dataTabungan')->with('error', 'Uang Tabungan kurang');
        } else {
            $jumlah = $tabungan->jumlah_tabungan - $request->jumlah_penarikan;
            $tabungan->update(['jumlah_tabungan' => $jumlah]);
            HistoryPenarikan::create($request->all());
            return redirect('/dataTabungan')->with('success', 'Tabungan berhasil diambil');
        }
    }
}