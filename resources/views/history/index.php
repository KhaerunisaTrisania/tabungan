@extends('layout.app')
@section('content')
<h3 class="mt-2">Histori Pemasukan</h3>
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
            <td witdh="33%">Tanggal</td>
            <td witdh="33%">Nama Anggota</td>
            <td witdh="33%">Jumlah Pembayaran</td>
        </tr>
    </thead>
    <tbody>

    </tbody>
    <tbody>
    </tbody>
</table>
<br><br>
<h3 class="mt-5">Histori Penarikan</h3>
<table class="table table-striped mt-2">
    <thead class="bg-dark text-light">
        <tr>
            <td witdh="33%">Tanggal</td>
            <td witdh="33%">Nama Anggota</td>
            <td witdh="33%">Jumlah Penarikan</td>
        </tr>
    </thead>
    <tbody>

    </tbody>
    <tbody>
    </tbody>
</table>
@endsection