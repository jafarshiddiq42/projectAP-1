
@extends('pages.home')
@section('content')


    
<div class="container mt-3 p-4">
    <div class="card">
        <div class="card-header">
            <h4 class="float-start">TAMBAH PELANGGAN</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/servis/store">
                @csrf   
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode</label>
                    <input type="text" name="kode" value="{{old('kode')}}"
                     class="form-control @error('kode') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('kode')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Jenis Layanan</label>
                    <select name="jenis" id="" class="form-control">
                        <option value="" >Pilih Jenis Layanan</option>
                        <option value="kulkas" >Kulkas</option>
                        <option value="strika" >Strika</option>
                        <option value="blender" >Blender</option>
                        <option value="despenser" >Despenser</option>
                       
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Layanan</label>
                    <input type="date" name="waktu" value="{{old('waktu')}}"
                     class="form-control @error('waktu') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('waktu')
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
               


                <button type="submit"  class="btn btn-danger t">Tambah</button>
                <a href="/layanan/index" class="btn btn-secondary ">Batal</a>
            </form>
        </div>
    </div>
  </div>
@endsection