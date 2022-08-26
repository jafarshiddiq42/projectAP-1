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
    // public function barangs()
    // {
    //     return $this->hasMany(Barang::class,'servis_id');
    // }
    public function layanans()
    {
        return $this->hasone(Layanan::class,'id','layanan_id');
    }
    public function transaksis()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
