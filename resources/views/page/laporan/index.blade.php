@extends('pages.home')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card m-5">
              {{-- <img class="card-img-top" src="holder.js/100px180/" alt="Laporan Servis"> --}}
              <div class="card-body">
                <h4 class="card-title">Laporan Servis</h4>
                {{-- <p class="card-text"></p> --}}
                <div class="m-3">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>no</th>
                            <th>Jenis layanan</th>
                            <th>Total Servis</th>
                            <th>Total Pendapatan</th>
                        </tr>
                        </thead>
                        <tbody>
                          @forelse ($serviss as $servis)
                          <tr>
                            <td>{{$nomor++}}</td>
                            <td>{{$servis->jenislayanan}}</td>
                            <td>{{$servis->total}}</td>
                            <td>{{($servis->harga == null ?0:$servis->harga)}}</td>
                           
                        </tr>
                          @empty
                              
                          @endforelse
                          <tr style="font-weight: bold">
                            <td class="text-center" colspan="3">Total</td>
                           <td> {{$total[0]->total}}</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection