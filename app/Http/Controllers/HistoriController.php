<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryPenarikan;
use App\Models\HistoryPembayaran;

class HistoriController extends Controller
{
    public function index()
    {
        $penarikan = HistoryPenarikan::orderBy('created_at', 'DESC')->get();
        $pemasukan = HistoryPembayaran::orderBy('created_at', 'DESC')->get();
        return view('histori.index', compact('penarikan', 'pemasukan'));
    }
}