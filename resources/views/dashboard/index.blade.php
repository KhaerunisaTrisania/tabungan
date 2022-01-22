@extends('layout.app')
@section('content')
<div class=" row mt-3">
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <p class="card-text"><b>Total Tabungan</b></p>
                <h4 class="card-title">Rp{{$totalTabungan}}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <p class="card-text"><b>Total Kas Saat ini</b></p>
                <h4 class="card-title">Rp{{$kasNow}}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body text-center">
                <p class="card-text"><b>Total Penarikan</b></p>
                <h4 class="card-title">Rp{{$totalPenarikan}}</h4>
            </div>
        </div>
    </div>
</div>

<div class='row mt-5'>
    <div class="col-sm-6">
        <h4>Pemasukan Terbaru</h4>
        <table class="table table-striped mt-2">
            <thead class="bg-success text-light">
                <tr>
                    <td width="20%">Tanggal</td>
                    <td width="20%">Anggota</td>
                    <td width="20%">Jumlah</td>
                </tr>
            </thead>
            <tbody>
                @foreach($pemasukanTerbaru as $pemasukan)
                <tr>
                    <td>{{date('Y-m-d',strtotime($pemasukan->created_at))}}</td>
                    <td>{{$pemasukan->Anggota->nama}}</td>
                    <td>{{$pemasukan->jumlah_pemasukan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h4>Penarikan Terbaru</h4>
        <table class="table table-striped mt-2">
            <thead class="bg-success text-light">
                <tr>
                    <td width="20%">Tanggal</td>
                    <td width="20%">Anggota</td>
                    <td width="20%">Jumlah</td>
                </tr>
            </thead>
            <tbody>
                @foreach($penarikanTerbaru as $penarikan)
                <tr>
                    <td>{{date('Y-m-d',strtotime($pemasukan->created_at))}}</td>
                    <td>{{$penarikan->Anggota->nama}}</td>
                    <td>{{$penarikan->jumlah_penarikan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection