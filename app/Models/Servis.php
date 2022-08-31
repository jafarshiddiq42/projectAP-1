<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Servis extends Model
{
    // use HasFactory;
    public function mekaniks()
    {
        return $this->hasOne(Mekanik::class,'id','mekanik_id');
    }
    public function barangs()
    {
        return $this->hasOne(Barang::class,'id','barang_id');
    }
    public function layanans()
    {
        return $this->hasone(Layanan::class,'id','layanan_id');
    }
    public function pelanggans()
    {
        return $this->hasone(Pelanggan::class,'id','pelanggan_id');
    }
    public function transaksis()
    {
        return $this->belongsTo(Transaksi::class,'servis_id');
    }
}
