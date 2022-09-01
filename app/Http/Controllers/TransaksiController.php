<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Servis;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor=1;
        $transaksi = Transaksi ::all();
        return view('page.transaksi.index', compact('transaksi','nomor'));
    }

    public function bayar($id)
    {
        $transaksi = Transaksi::find($id);
        // dd($transaksi);
        $transaksi->status = 1; 
        $transaksi->save();

        return redirect('/transaksi/index');  
    }

    // public function getDetails($id = 0)
    // {
    //     $data = Servis::where('namapelanggan', $id)->first();
    //     return response()->json($data);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
     
        $serviss = Servis::all();
        $transaksi = Transaksi::all('id');
        $layanans = Layanan::all();
        // dd($transaksi);
        return view('page.transaksi.form', compact('serviss','layanans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $barang = Servis :: where('jenislayanan','=',$request->lay)->get();

        // dd($request->all());
        $transaksi= new Transaksi();
        $transaksi->nofak =$request->nofak;
        $transaksi->tanggalbayar =$request->tanggalbayar;
        $transaksi->servis_id =$request->noservis;
        $transaksi->harga =$request->harga;
        $transaksi->save();

        return redirect('/transaksi/index');
    }

    /**
     * Display the specified resource.
     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tambah()
    {
        // $servis = Servis::all();
        $serviss = Servis::leftjoin('transaksis','transaksis.servis_id','=','servis.id')->select('servis.*')->whereNull('transaksis.servis_id')->get();
        // $serviss = Servis::leftouterjoin('transaksis','transaksis.servis_id','=','servis.id')->get();
        // $serviss = DB::table(;)
        $layanans = Layanan::all();
        // $transaksi=Transaksi::all('id');
        // dd($serviss);
      
        if (Transaksi::all()->count() != 0) {
            $kd = Transaksi::latest('id')->first();
            $kodejadi = $kd->id + 1;
        }  
        else {
            $kodejadi =1;
        }
        // dd($kodejadi);
        return view('page.transaksi.form',compact('kodejadi','serviss','layanans'));
    }
    
//cetak faktur
    public function printfaktur($id)
    {
        $transaksi =  Transaksi::find($id);
        return view('page.transaksi.struk',compact('transaksi'));
       
    }
}
