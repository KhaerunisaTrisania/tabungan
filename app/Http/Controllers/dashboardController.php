<?php

namespace App\Http\Controllers;

use App\Models\DataTabungan;
use App\Models\HistoryPembayaran;
use App\Models\HistoryPenarikan;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $totalTabungan = HistoryPembayaran::sum('jumlah_pemasukan');
        $kasNow = DataTabungan::sum('jumlah_tabungan');
        $totalPenarikan = HistoryPenarikan::sum('jumlah_penarikan');
        $pemasukanTerbaru = HistoryPembayaran::take(5)->with('Anggota')->orderBy('created_at', 'desc')->get();
        $penarikanTerbaru = HistoryPenarikan::take(5)->with('Anggota')->orderBy('created_at', 'desc')->get();
        return view('dashboard.index', compact('pemasukanTerbaru', 'penarikanTerbaru', 'totalTabungan', 'kasNow', 'totalPenarikan'));
    }
}