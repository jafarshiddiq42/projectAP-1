<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class TesController extends Controller
{
    public function index()
    {
        return view('page.tes');
    }
    public function cekdata($request)
    {
        $pelanggans = Pelanggan::where('namapelanggan','LIKE','%'.$request->keyword.'%')->get();
        return view('page.data',compact('pelanggans'));
    }
}
