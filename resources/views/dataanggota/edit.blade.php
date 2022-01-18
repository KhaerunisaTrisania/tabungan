
@extends('layout.app')
@section("content")
<div class="col-md-8 offset-md-2">
    <h3>Edit Anggota</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div><br>
    @endif

    <form method="post" action="/dataanggota">
        @csrf
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" name="nik"value="{{$anggota->nik}}">
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$anggota->nama}}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat"value="{{$anggota->alamat}}">
        </div>

        <div class="form-group">
            <label for="no_hp">No Hp</label>
            <input type="text" class="form-control" name="no_hp"value="{{$anggota->no_hp}}">
        </div>

        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>
@endsection