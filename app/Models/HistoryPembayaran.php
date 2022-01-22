<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'anggota_id', 'jumlah_pemasukan'
    ];

    public function Anggota()
    {
        return $this->belongsTo(DataAnggota::class, 'anggota_id');
    }
}