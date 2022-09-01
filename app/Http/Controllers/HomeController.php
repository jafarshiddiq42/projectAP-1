<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Mekanik;
use App\Models\Pelanggan;
use App\Models\Servis;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transaksi = Transaksi::all()->count();
        $layanan = Layanan::all()->count();
        $mekanik = Mekanik::all()->count();
        $servis = Servis::all()->count();
        $pelanggan =Pelanggan::all()->count();
        return view('page.dashboard',compact('transaksi','layanan','mekanik','servis','pelanggan'));
    }
}
