<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggota extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik', 'nama', 'alamat', 'no_hp'
    ];

    public function DataTabungan()
    {
        return $this->hasOne(DataTabungan::class, 'anggota_id');
    }
}