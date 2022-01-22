<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTabungan extends Model
{
    use HasFactory;
    protected $fillable = [
        'anggota_id', 'jumlah_tabungan'
    ];

    public function DataAnggota()
    {
        return $this->belongsTo(DataAnggota::class, 'anggota_id');
    }
}