@extends('layout.app')
@section('content')
<h2 class="mt-2">Data Tabungan</h2>
<a href="javascript:void(0)" class="btn btn-success mb-2">Input Tabungan</a>
<a href="javascript:void(0)" class="btn btn-warning mb-2 text-light">Tarik Uang</a>
@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session()->get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<table class="table table-striped mt-2">
    <thead class="bg-dark text-light">
        <tr>
            <td>NIK</td>
            <td>Nama Anggota</td>
            <td>Jumlah Tabungan</td>
        </tr>
    </thead>
    <tbody>
        @foreach($tabungan as $tab)
        <tr>
            <td>{{$tab->nik}}</td>
            <td>{{$tab->nama}}</td>
            <td>{{$tab->DataTabungan->jumlah_tabungan}}</td>
        </tr>
        @endforeach
    </tbody>
    <tbody>
    </tbody>
</table>
@endsection