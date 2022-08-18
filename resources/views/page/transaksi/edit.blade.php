
@extends('pages.home')
@section('content')



    <div class="card">
        <div class="card-header">
            <h4 class="float-start">EDIT LAYANAN</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/layanan/{{$layanan->id}}">
                @csrf   
               
                
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode</label>
                    <input type="text" name="kode"  value="{{$layanan->kode}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                {{-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis Layanan</label>
                    <input type="text"  name="jenis" value="{{$layanan->jenis}}" class="form-control" id="exampleInputPassword1">
                </div> --}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Jenis Layanan</label>
                    <select name="jenis" id="" class="form-control"> 
                        {{-- <option value="" >Pilih Jenis Layanan</option> --}}
                        <option value="kulkas" {{$layanan->jenis=='kulkas' ? 'selected'  : ''}} >Kulkas</option>
                        <option value="strika"  {{$layanan->jenis=='strika '? 'selected'  : ''}} >Strika</option>
                        <option value="blender"  {{$layanan->jenis=='blender' ? 'selected'  : ''}} >Blender</option>
                        <option value="despenser"  {{$layanan->jenis=='despenser' ? 'selected'  : ''}} >Despenser</option>
                    </select>
                 
                    
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"> Tanggal </label>
                    <input type="date"  name="waktu" value="{{$layanan->waktu}}" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text"  name="harga" value="{{$layanan->harga}}" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/layanan/index" class="btn btn-warning text-white">Batal</a>
            </form>
            
        </div>
  
@endsection