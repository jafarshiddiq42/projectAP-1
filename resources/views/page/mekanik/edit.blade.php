
@extends('pages.home')
@section('content')



   <div class="container mt-3 p-4">
    <div class="card">
        <div class="card-header">
            <h4 class="float-start">EDIT MEKANIK</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/mekanik/{{$mekanik->id}}">
                @csrf   
               
                
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Mekanik</label>
                    <input type="text" name="namamekanik"  value="{{$mekanik->namamekanik}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat</label>
                    <input type="text" name="alamatmekanik"  value="{{$mekanik->alamatmekanik}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telp/Hp</label>
                    <input type="text" name="no_Hp"  value="{{$mekanik->no_Hp}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-danger">Edit Data</button>
                <a href="/mekanik/index" class="btn btn-secondary ">Batal</a>
             
            </form>
            
        </div>


   </div>
  
@endsection
