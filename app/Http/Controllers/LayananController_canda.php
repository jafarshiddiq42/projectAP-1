<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Mekanik;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $nomor=1;
        $layanan = Layanan ::all();
        return view('page.layanan.index', compact('layanan','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mekanik = Mekanik::all();
        return view('page.layanan.form', compact('mekanik'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $layanan = new Layanan();
        $layanan->namacustumer = $request->namacustumer;
        $layanan->mekanik_id = $request->mekanik;
        $layanan->jenislayanan = $request->jenislayanan;
        $layanan->tanggallayanan = $request->tanggallayanan;
        $layanan->alamat = $request->alamat;
        $layanan->no_hp = $request->no_hp;
        $layanan->keterangan = $request->keterangan;
        $layanan->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
}
