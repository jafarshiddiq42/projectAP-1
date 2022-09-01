@extends('pages.home')
@section('content')
<div class="m-3">
    <div class="row">
       <div class="col ">
        <div class="d-flex bg-secondary p-2 justify-content-center">
          {{-- pelanggan --}}
          <a href="/pelanggan/index">
            <div class="card m-3 " style="width:200px">
              <img class="card-img-top" src="holder.js/100px180/" alt="">
              <div class="card-body">
                <h4 class="card-title">Pelanggan</h4>
                <p class="card-text">{{ $pelanggan }}</p>
              </div>
            </div>
          </a>
        {{-- layanan --}}
          <a href="/layanan/index">
            <div class="card m-3 " style="width:200px">
              <img class="card-img-top" src="holder.js/100px180/" alt="">
              <div class="card-body">
                <h4 class="card-title">Layanan</h4>
                <p class="card-text">{{ $layanan }}</p>
              </div>
            </div>
          </a>
        {{-- layanan --}}
         <a href="/mekanik/index">
          <div class="card m-3 " style="width:200px">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
              <h4 class="card-title">Mekanik</h4>
              <p class="card-text">{{ $mekanik }}</p>
            </div>
          </div>
         </a>
        </div>
       </div>
             
    </div>
    <div class="row mt-2">
       <div class="col ">
        <div class="d-flex bg-secondary p-2 justify-content-center">
        {{-- layanan --}}
        <a href="/servis/index">
          <div class="card m-3 " style="width:200px">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
              <h4 class="card-title">Servis</h4>
              <p class="card-text">{{ $servis }}</p>
            </div>
          </div>
        </a>
        {{-- layanan --}}
          <a href="/transaksi/index">
            <div class="card m-3 " style="width:200px">
              <img class="card-img-top" src="holder.js/100px180/" alt="">
              <div class="card-body">
                <h4 class="card-title">Pembayaran</h4>
                <p class="card-text">{{ $transaksi }}</p>
              </div>
            </div>
          </a>
        </div>
       </div>
             
    </div>
</div>
@endsection