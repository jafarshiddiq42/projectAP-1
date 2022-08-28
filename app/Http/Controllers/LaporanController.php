<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        $nomor =1;
        $serviss=DB::select('
        SELECT layanans.jenislayanan,SUM(transaksis.harga) as harga ,COUNT(servis.layanan_id) AS total FROM `layanans` 
        LEFT OUTER JOIN servis ON servis.layanan_id = layanans.id 
        LEFT OUTER JOIN transaksis on servis.id = transaksis.servis_id 
        GROUP BY layanans.jenislayanan;
        ');
        $total= DB::select('SELECT SUM(transaksis.harga) as total from servis
        JOIN transaksis on servis.id = transaksis.servis_id
        ');
        // $servis = Servis::join('layanans','layanans.id','servis.layanan_id')->select('layanans.*')->groupBy('layanans.jenislayanan')->OrderBy('layanans.jenislayanan')->get();
        // dd($total);
        return view('page.laporan.index',compact('serviss','nomor','total'));
    }
}
