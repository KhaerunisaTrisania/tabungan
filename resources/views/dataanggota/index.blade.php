@extends('layout.app')
@section('content')
    <h1>Data Anggota</h1>
    <a href="/dataanggota/create" class="btn btn-success">Tambah Anggota</a>
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <td>NIK</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>No Hp</td>
                <td colspan=2></td>
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
                    <a href="/dataanggota/{{$anggota->id}}/edit/" class="btn btn-primary">Edit</a>
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
