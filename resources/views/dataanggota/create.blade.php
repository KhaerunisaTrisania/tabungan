@extends('layout.app')
@section('content')
    <div class="col-md-8 offset-md-2 mt-3">
        <h3>Tambah Anggota</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br>
        @endif

        <form method="post" action="/dataanggota">
            @csrf
            <div class="form-group mt-2">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik">
            </div>

            <div class="form-group mt-2">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>

            <div class="form-group mt-2">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>

            <div class="form-group mt-2">
                <label for="no_hp">No Hp</label>
                <input type="number" class="form-control" name="no_hp">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
