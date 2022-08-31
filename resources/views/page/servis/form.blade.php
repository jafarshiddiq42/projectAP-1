@extends('pages.home')
@section('content')
    <div class="container mt-3 p-4">
        <div class="card">
            <div class="card-header">
                <h4 class="float-start">TAMBAH SERVIS</h4>
            </div>
            <div class="card-body m-4">
                <form method="post" action="/servis/store">
                    @csrf
                    {{-- <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                        <input type="text" name="namapelanggan" value="{{ old('namapelangan') }}"
                            class="form-control @error('kode') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('namapelanggan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    <h2>Data Layanan</h2>
                    <div class="mb-3" hidden>
                        <label for="exampleInputEmail1" class="form-label">Nama pelanggan</label>
                       <input type="text" readonly name="idpelanggan" value="{{ $id }}" id="">
                        @error('namamekanik')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Mekanik</label>
                        <select name="mekanik" class="form-control" id="">
                            <option value="" selected disabled>-- pilih mekanik--</option>
                            @foreach ($mekanik as $data)
                                <option value="{{ $data->id }}">{{ $data->namamekanik }}</option>
                            @endforeach
                        </select>
                        @error('namamekanik')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Layanan</label>
                        <select name="layanan" class="form-control" id="">
                            <option value="" selected disabled>-- jenis layanan --</option>
                            @foreach ($layanans as $layanan)
                                <option value="{{ $layanan->id }}">{{ $layanan->jenislayanan }}</option>
                            @endforeach
                        </select>
                        @error('jenislayanan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

              <h2>Data barang</h2>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <input type="text" name="namabarang" value="{{ old('telp') }}"
                            class="form-control @error('telp') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('telp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Merek</label>
                        <input type="text" name="merk" value="{{ old('telp') }}"
                            class="form-control @error('telp') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('telp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Seri</label>
                        <input type="text" name="noseri" value="{{ old('telp') }}"
                            class="form-control @error('telp') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('telp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kerusakan</label>
                        <input type="text" name="kerusakan" value="{{ old('telp') }}"
                            class="form-control @error('telp') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('telp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                        <input type="text" name="desc" value="{{ old('telp') }}"
                            class="form-control @error('telp') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('telp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Masuk</label>
                        <input readonly  type="date" name="tanggalmasuk" value="{{ date('Y-m-d') }}"
                            class="form-control @error('tanggalmasuk') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('tanggalmasuk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>





                    <!-- data tambah servis -->
                    <div class="mt-4">
                        <button type="submit" class="btn btn-danger t">Tambah</button>
                        <a href="/servis/index" class="btn btn-secondary ">Batal</a>
                    </div>
                   
            </div>
        </div>
       
        </form>
    </div>
    </div>
    </div>
@endsection
