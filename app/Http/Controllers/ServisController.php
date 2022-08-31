<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Layanan;
use App\Models\Mekanik;
use App\Models\Servis;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor=1;
        $serviss = Servis::all();
        return view('page.servis.index', compact('serviss','nomor'));
        // dd($servis);
    }
    public function perservis($id)
    {
        $nomor=1;

        $serviss = Servis::where('pelanggan_id','=',$id)->get();
        return view('page.servis.index2', compact('serviss','nomor','id'));
        // dd($serviss);
    }
    public function selesai($id)
    {
        // $nomor=1;

        $servis = Servis::where('id','=',$id)->first();
        $servis->status = 1;
        $servis->tglselesai = date('Y-m-d');
        $servis->save() ;
        return redirect()->back();
        // return view('page.servis.index2', compact('serviss','nomor','id'));
        // dd($serviss);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id) 
    {
        $layanans = Layanan::all();
        $mekanik = Mekanik::all();
        return view('page.servis.form',compact('mekanik','layanans','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $barang = new Barang();
        $barang->namabarang = $request->namabarang;
        $barang->merk = $request->merk;
        $barang->noseri = $request->noseri;
        $barang->kerusakan = $request->kerusakan;
        $barang->deskripsi = $request->desc;
        $barang->servis_id = 0;
        $barang->save();

        $servis= new Servis();
        $servis->mekanik_id = $request->mekanik;
        $servis->layanan_id = $request->layanan;
        $servis->barang_id = $barang->id;   
        $servis->pelanggan_id = $request->idpelanggan;
        $servis->tanggalmasuk = $request->tanggalmasuk;
        $servis->save();
        return redirect('/servis/pelanggan/'.$request->idpelanggan);
    }

    /**
     * Display the specified resource.
     *
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
        $servis = Servis:: find ($id);
        $mekanik = Mekanik::all();
        $layanans = Layanan :: all();
        $barangs = Barang::where('servis_id','=',$id)->get();
        
        return view('page.servis.edit',compact('servis','mekanik','barangs','layanans'));
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
        $servis = Servis:: find ($id);

        $servis->namapelanggan = $request->namapelanggan;
        $servis->mekanik_id = $request->mekanik;
        $servis->layanan_id = $request->layanan;
        $servis->tanggalmasuk = $request->tanggalmasuk;
        $servis->alamat = $request->alamat;
        $servis->telp = $request->telp;
        $servis->kerusakan = $request->kerusakan;

        $servis->save();

    //     $index = 0;
    //   if (isset($request->barangs)) {
          
    //     foreach ($request->barangs as $barang) {
    //         $barangedit = Barang::find($request->idbarang[$index]) ;
    //         $barangedit->nm_barang = $barang;
    //         $barangedit->kerusakan = $request->kerusakan[$index];
    //         $index++;
    //         $barangedit->save();
    //      }
    //   }
    //     // $index2=0;
    //     for ($i=0; $i <  count( $request->barangtambah) ; $i++) { 
    //         $barang = new Barang();
    //         $barang->nm_barang = $request->barangtambah[$i]; 
    //         $barang->kerusakan = $request->kerusakantambah[$i];
    //         $barang->servis_id = $servis->id;
    //         $barang->save(); 
    //     }

        return redirect('/servis/index');

        // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servis = Servis ::find($id);
        $servis->delete();
       
        return redirect('/servis/index');
    }

    public function sruktur()
    {
        
       
        return view('page.servis.sruktur');
    }
}
