<?php

namespace App\Http\Controllers;

use App\Models\Barang;
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
        $servis = Servis ::all();
        return view('page.servis.index', compact('servis','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $mekanik = Mekanik::all();
        return view('page.servis.form',compact('mekanik'));
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
        $servis = new Servis();
        $servis->namapelanggan = $request->namapelanggan;
        $servis->mekanik_id = $request->mekanik;
        $servis->alamat = $request->alamat;
        $servis->tanggalmasuk = $request->tanggalmasuk;
        $servis->telp = $request->telp;
        $servis->save();
        for ($i=0; $i <  count( $request->barang) ; $i++) { 
            $barang = new Barang();
            $barang->nm_barang = $request->barang[$i]; 
            $barang->kerusakan = $request->kerusakan[$i];
            $barang->servis_id = $servis->id;
            $barang->save(); 
        }

        // echo count( $request->barang);

        return redirect('/servis/index');
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
        $barangs = Barang::where('servis_id','=',$id)->get();
        
        return view('page.servis.edit',compact('servis','mekanik','barangs'));
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
        $servis->alamat = $request->alamat;
        $servis->tanggalmasuk = $request->tanggalmasuk;
        $servis->telp = $request->telp;
        $servis->save();

        $index = 0;
      if (isset($request->barangs)) {
          
        foreach ($request->barangs as $barang) {
            $barangedit = Barang::find($request->idbarang[$index]) ;
            $barangedit->nm_barang = $barang;
            $barangedit->kerusakan = $request->kerusakan[$index];
            $index++;
            $barangedit->save();
         }
      }
        // $index2=0;
        for ($i=0; $i <  count( $request->barangtambah) ; $i++) { 
            $barang = new Barang();
            $barang->nm_barang = $request->barangtambah[$i]; 
            $barang->kerusakan = $request->kerusakantambah[$i];
            $barang->servis_id = $servis->id;
            $barang->save(); 
        }

        return redirect('/servis/index');

        dd($request->all());
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
}
