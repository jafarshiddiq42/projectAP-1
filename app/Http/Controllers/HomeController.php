<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Mekanik;
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
        $transaksis = Transaksi::orderBy('id', 'desc')->take(5)->get();
        $layanan = Layanan::all()->count();
        $mekanik = Mekanik::all()->count();
        $servis = Servis::all()->count();
        return view('page.dashboard',compact('transaksis','layanan','mekanik','servis'));
    }
}
