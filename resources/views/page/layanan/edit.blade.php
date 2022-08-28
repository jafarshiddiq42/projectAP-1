@extends('pages.home')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="float-start">EDIT SERVIS</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/layanan/{{ $servis->id }}">
                @csrf
                @method('PUT')
                <div class="card-body m-4">
                    <form method="post" action="/layanan/store">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Layanan</label>
                            <input type="text" name="namalayanan" value="{{ $layanans->jenislayanan }}"
                                class="form-control @error('namalayanan') is-invalid @enderror" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>

                        {{-- <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Mekanik</label>
                            <select name="mekanik" class="form-control" id="">
                                @foreach ($mekanik as $data)
                                    <option value="{{ $data->id }}">{{ $data->namamekanik }}</option>
                                @endforeach
                            </select>

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





                        <!-- data tambah servis -->
                        <div class="row">
                            <div class="p-3">
                                <a href="#"
                                    style="  background-color: #04AA6D;
                                border: none;
                                color: white;
                                text-align: center;
                                padding: 5px 10px;
                                text-decoration: none;
                                display: inline-block;
                                float:right;
                                font-size: 16px;
                                margin: 2px 2px;
                                border-radius: 50%;"
                                    onclick="event.preventDefault();tes()"><i class="fa fa-plus"></i></a>

                            </div>
                            <div class="col">
                                <div class="tes" id="tambahkemari">
                                    @forelse ($barangs as $barang)
                                        <div class="row my-2">
                                            <div class="col-auto d-flex ">
                                                <div class="align-self-center" style="font-size: 14px">1</div>
                                            </div>
                                            <div class="col" hidden>Nama Barang :<input type="text" readonly
                                                    name="idbarang[]" placeholder="" value="{{ $barang->id }}"
                                                    class="form-control" placeholder="kerusakan"></div>
                                            <div class="col">Nama Barang :<input type="text" name="barangs[]"
                                                    placeholder="" value="{{ $barang->nm_barang }}" class="form-control"
                                                    placeholder="kerusakan"></div>
                                            <div class="col">Kerusakan<input type="text"
                                                    value="{{ $barang->kerusakan }}" name="kerusakan[]" placeholder=""
                                                    class="form-control" placeholder="kerusakan"></div>
                                                    <div class="col-1">
                                                        <span>
                                                            <div class="pt-4 ">
                                                                <a href="/barang/{{$barang->id}}"
                                                                    style=" 
                                                                background-color:red;
                                                                border: none;
                                                                color: white;
                                                                text-align: center;
                                                                padding: 5px 10px;
                                                                text-decoration: none;
                                                                display: inline-block;
                                                                float:right;
                                                                font-size: 16px;
                                                                margin: 2px 2px;
                                                                border-radius: 50%;">
                                                                <i class="fa fa-minus"></i></a>
        
                                                            </div>
                                                        </span>
                                                    </div>

                                        </div>
                                    @empty
                                        kosong
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <script>
                            var nomor = 1;

                            function tes() {
                                nomor++;
                                $('  <div class="row my-2"> <div class="col-auto d-flex "><div class="align-self-center" style="font-size: 14px">' +
                                        `${nomor}` +
                                        '</div></div><div class="col">Nama Barang :<input type="text"   name="barangtambah[]"  placeholder="" class="form-control" placeholder="kerusakan"></div><div class="col">Kerusakan<input type="text"  name="kerusakantambah[]"  placeholder="" class="form-control" placeholder="kerusakan"></div><div class="col-1"></div></div> '
                                    )
                                    .appendTo('#tambahkemari');
                            }
                        </script>
                </div> --}}

                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/servis/index" class="btn btn-warning text-white">Batal</a>
            </form>

        </div>
    @endsection
