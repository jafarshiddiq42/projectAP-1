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
        $layanans = Layanan::all();
        return view('page.layanan.index',compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('page.layanan.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $layananbaru = new Layanan();
        $layananbaru->jenislayanan = $request->namalayanan;
        $layananbaru->save();
        return redirect('/layanan/index');

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
        $layananbaru = Layanan:: find ($id);

        return view('page.layanan.edit',compact('layanan'));
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
        $layananbaru = Layanan:: find ($id);
     
        $layananbaru->jenislayanan = $request->namalayanan;
        $layananbaru->save();

        return redirect('/layanan/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
         return redirect()->back();
    }
}
