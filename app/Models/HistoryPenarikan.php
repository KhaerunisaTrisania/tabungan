<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPenarikan extends Model
{
    use HasFactory;
    protected $fillable = [
        'anggota_id', 'jumlah_penarikan'
    ];

    public function Anggota()
    {
        return $this->belongsTo(DataAnggota::class, 'anggota_id');
    }
}