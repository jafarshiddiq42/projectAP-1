
@extends('pages.home')
@section('content')


    
<div class="container mt-3 p-4">
    <div class="card">
        <div class="card-header">
            <h4 class="float-start">TAMBAH TRANSAKSI</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/servis/store">
                @csrf   
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOFAK</label>
                    <input type="text" name="nofak" value="JS-"
                     class="form-control @error('nofak') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('nofak')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NAMA PELANGGAN</label>
                    <input type="text" name="namapelanggan" value="{{old('namapelanggan')}}"
                     class="form-control @error('namapelanggan') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('namapelanggan')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
               

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                    <input type="date" name="tanggalkeluar" value="{{old('tanggalkeluar')}}"
                     class="form-control @error('tanggalkeluar') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('tanggalkeluar')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" name="harga" value="{{old('harga')}}"
                     class="form-control  @error('harga') is-invalid @enderror"  id="exampleInputPassword1">
                     @error('harga')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">QTY</label>
                    <input type="text" name="qty" value="{{old('qty')}}"
                     class="form-control  @error('qty') is-invalid @enderror"  id="exampleInputPassword1">
                     @error('qty')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">TOTAL</label>
                    <input type="text" name="total" value="{{old('harga')}}"
                     class="form-control  @error('total') is-invalid @enderror"  id="exampleInputPassword1">
                     @error('total')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
               
               


                <button type="submit"  class="btn btn-danger t">Tambah</button>
                <a href="/transaksi/index" class="btn btn-secondary ">Batal</a>
            </form>
        </div>
    </div>
  </div>
@endsection