<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pesanan;

class Layanan extends Model
{
    protected $fillable = ['nama_layanan', 'kategori', 'deskripsi', 'harga', 'gambar'];

    public function pesanans() {
        return $this->hasMany(Pemesanan::class);
    }
}
