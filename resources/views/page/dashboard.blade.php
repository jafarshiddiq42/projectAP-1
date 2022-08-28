@extends('pages.home')
@section('content')
<div class="m-4">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
              <div class="col-xs-4">
                <a href="/servis/index">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="card-title">Servis <span style="float:right;background-color: rgb(0, 115, 197);border-radius:8px;color:white;" class="p-2">{{$servis}}</span></h3>
                          {{-- <p class="card-text">Text</p> --}}
                        </div>
                      </div>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="/mekanik/index">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="card-title">Mekanik <span style="float:right;background-color: rgb(0, 115, 197);border-radius:8px;color:white;" class="p-2">{{$mekanik}}</span></h3>
                          {{-- <p class="card-text">Text</p> --}}
                        </div>
                      </div>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="/layanan/index">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="card-title">Layanan <span style="float:right;background-color: rgb(0, 115, 197);border-radius:8px;color:white;" class="p-2">{{$layanan}}</span></h3>
                          {{-- <p class="card-text">Text</p> --}}
                        </div>
                      </div>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="/laporan">
                    <div class="card">
                        <div class="card-body">
                          <h3 class="card-title">Laporan</h3>
                          {{-- <p class="card-text">Text</p> --}}
                        </div>
                      </div>
                </a>
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card ">
              {{-- <img class="card-img-top" src="holder.js/100px180/" alt="Title"> --}}
              <div class="card-body">
                <h4 class="card-title">Transaksi <span style="padding-left:120px;font-size: 12px;"> <u><a class="text-white" style="background-color: rgb(194, 198, 147);padding:4px;border-radius:10px" href="/transaksi/index">lihat semua</a></u></span></h4>
                <table class="table" style="font-size: small">
                   <tbody >
                    @foreach ($transaksis as $transaksi)
                    <tr>
                        <td>{{'TR-'.str_pad($transaksi->id,5,0,STR_PAD_LEFT)}}</td>
                        <td>{{$transaksi->serviss->namapelanggan}}</td>
                        <td>{{$transaksi->serviss->layanans->jenislayanan}}</td>
                        <td></td>
                    </tr>
                    @endforeach
                   </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection