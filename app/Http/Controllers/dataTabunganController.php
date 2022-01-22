<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use App\Models\DataTabungan;
use Illuminate\Http\Request;

class dataTabunganController extends Controller
{
    public function index()
    {
        $tabungan = DataAnggota::with('DataTabungan')->get();
        return view('dataTabungan.index', compact('tabungan'));
    }
}