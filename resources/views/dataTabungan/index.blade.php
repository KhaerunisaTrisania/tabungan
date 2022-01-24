@extends('layout.app')
@section('content')
<h2 class="mt-2">Data Tabungan</h2>
<a href="javascript:void(0)" class="btn btn-success mb-2" data-toggle="modal" data-target="#modalTabungan">Input Tabungan</a>
<a href="javascript:void(0)" class="btn btn-warning mb-2 text-light">Tarik Uang</a>
<a href="javascript:void(0)" class="btn btn-primary mb-2 text-light">Buat Laporan</a>
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

@section('script')
<!-- Modal -->
<div class="modal fade" id="modalTabungan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Input Tabungan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/inputTabungan" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Anggota</label>
                        <select name="anggota_id" id="" class="form-control">
                            @foreach($tabungan as $tab)
                            <option value="{{$tab->id}}">{{$tab->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah</label>
                        <input type="number" name="jumlah_pemasukan" class="form-control" id="" placeholder="jumlah">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection