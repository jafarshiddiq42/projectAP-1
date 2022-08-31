@extends('pages.home')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="main">
        <div class="page-header">
            <div class="breadcrumb page-title-right">
                {{-- <span class="me-1 text-gray"><i class="feather icon-home"></i></span> --}}
                <div class="breadcrumb-item"><a href="/"> Dashboard </a></div>
                <div class="breadcrumb-item"><a href="/pelanggan/index "> Data Pelanggan </a></div>
            </div>


        </div>


        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Daftar Pelanggan</h4>

                <h4 class="float-start"></h4>
                <a href="/servis/form" class="float-end btn btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Tambah Data</a>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Pelanggan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/pelanggan/store" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Nama Pelanggan</label>
                                        <input name="namapelanggan" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input name="email" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">No Hp</label>
                                        <input name="nohp" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input name="alamat" type="text" class="form-control">
                                    </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-4 mt-4">
                <table id="example1" class="table display">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pelanggans as $pelanggan)
                            <tr>
                                <td scope="row">{{ $nomor++ }}</td>
                                <td>{{ $pelanggan->namapelanggan }}</td>
                                <td>{{ $pelanggan->email }}</td>
                                <td>
                                    {{ $pelanggan->nohp }}
                                </td>
                                <td>{{ $pelanggan->alamat }}</td>

                                <td class="d-flex justify-content-center" style="gap: 4px">
                                    <a href="" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#e{{ $pelanggan->id }}"><i class="fa fa-pencil"></i></a>
                                    <div class="modal fade" id="e{{ $pelanggan->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">

                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Pelanggan
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/pelanggan/{{ $pelanggan->id }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="">Nama Pelanggan</label>
                                                            <input name="namapelanggan" type="text"
                                                                value="{{ $pelanggan->namapelanggan }}"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Email</label>
                                                            <input name="email" type="text"
                                                                value="{{ $pelanggan->email }}" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">No Hp</label>
                                                            <input name="nohp" type="text"
                                                                value="{{ $pelanggan->nohp }}" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Alamat</label>
                                                            <input name="alamat" type="text"
                                                                value="{{ $pelanggan->alamat }}" class="form-control">
                                                        </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/servis/pelanggan/{{ $pelanggan->id }}" class="btn btn-sm btn-primary"><i
                                            class="fa fa-eye"></i></a>
                                    <form action="/pelanggan/{{ $pelanggan->id }}" method="post"
                                        id="d{{ $pelanggan->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href=""
                                            onclick="event.preventDefault();document.getElementById('d{{ $pelanggan->id }}').submit()"
                                            type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                    </form>
                                </td>

                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak Ada Data</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
