
@extends('pages.home')
@section('content')


   
<div class="container mt-3 p-4">
    <div class="card">
        <div class="card-header">
            <h4 class="float-start">TAMBAH MEKANIK</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/mekanik/store">
                @csrf  
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Mekanik</label>
                    <input type="text" name="namamekanik" value="{{old('namamekanik')}}"
                     class="form-control @error('namamekanik') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('namamekanik')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" name="alamatmekanik" value="{{old('alamatmekanik')}}"
                     class="form-control @error('alamatmekanik') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('alamatmekanik')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No_Hp</label>
                    <input type="text" name="no_Hp" value="{{old('no_Hp')}}"
                     class="form-control @error('no_Hp') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('no_Hp')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <button type="submit"  class="btn btn-primary">Tambah</button>
                <a href="/mekanik/index" class="btn btn-warning text-white">Batal</a>
            </form>
        </div>

@endsection