<?php

namespace App\Http\Controllers;

use App\Models\DataAnggota;
use App\Models\DataTabungan;
use Illuminate\Http\Request;

class dataAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = DataAnggota::all(); //ambil data anggota
        return view('dataanggota.index', compact('anggotas')); //variabel dikirim ke tampilan yg tadi
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataanggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|max:16',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $create = DataAnggota::create($request->all());
        DataTabungan::create([
            'anggota_id' => $create->id,
            'jumlah_tabungan' => 0
        ]);
        return redirect('/dataanggota')->with('success', 'Data Anggota Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = DataAnggota::find($id);
        return view('dataanggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $anggota = DataAnggota::find($id);
        $request->validate([
            'nik' => 'required|max:16',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $anggota->update($request->all());
        return redirect('/dataanggota')->with('success', 'Data Anggota Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = DataAnggota::find($id);
        $anggota->delete();
        return redirect('/dataanggota')->with('success', 'Data Anggota berhasil dihapus');
    }
}