@extends('layout.app')
@section('content')
<h2 class="mt-2">Data Anggota</h2>
<a href="/dataanggota/create" class="btn btn-success mb-2">Tambah Anggota</a>
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
            <td width="20%">NIK</td>
            <td width="20%">Nama</td>
            <td width="20%">Alamat</td>
            <td width="20%">No Hp</td>
            <td colspan=2>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($anggotas as $anggota)
        <tr>
            <td>{{$anggota->nik}}</td>
            <td>{{$anggota->nama}}</td>
            <td>{{$anggota->alamat}}</td>
            <td>{{$anggota->no_hp}}</td>
            <td>
                <a href=" /dataanggota/{{$anggota->id}}/edit/" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="/dataanggota/{{$anggota->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection