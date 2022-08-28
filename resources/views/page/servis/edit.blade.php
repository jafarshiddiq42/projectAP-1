@extends('pages.home')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="float-start">EDIT SERVIS</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/servis/{{ $servis->id }}">
                @csrf
                @method('PUT')
                <div class="card-body m-4">
                    <form method="post" action="/servis/store">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                            <input type="text" name="namapelanggan" value="{{ $servis->namapelanggan }}"
                                class="form-control @error('namapelanggan') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Mekanik</label>
                            <select name="mekanik" class="form-control" id="">
                                @foreach ($mekanik as $data)
                                    <option value="{{ $data->id }}">{{ $data->namamekanik }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Layanan</label>
                            <select name="layanan" class="form-control" id="">
                                {{-- <option value="" selected disabled>-- jenis layanan --</option> --}}
                                @foreach ($layanans as $layanan)
                                    <option @if ($layanan->id == $servis->layanan_id)
                                        selected
                                    @endif value="{{ $layanan->id }}">{{ $layanan->jenislayanan }}</option>
                                @endforeach
                            </select>
                        </div> 

                   
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                            <input type="text" name="kerusakan" value="{{ $servis->kerusakan }}"
                                class="form-control @error('kerusakan') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>
                    

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="{{ $servis->alamat }}"
                                class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Telp</label>
                            <input type="text" name="telp" value="{{ $servis->telp }}"
                                class="form-control @error('telp') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Masuk</label>
                            <input type="date" name="tanggalmasuk" value="{{ $servis->tanggalmasuk }}"
                                class="form-control @error('tanggalmasuk') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp">

                        </div>





                        
                 
                </div>

                <button type="submit" class="btn btn-danger">Edit Data</button>
                <a href="/servis/index" class="btn btn-secondarya">Batal</a>
            </form>

        </div>
    @endsection
