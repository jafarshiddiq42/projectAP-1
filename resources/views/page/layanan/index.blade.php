@extends('pages.home')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="main">
        <div class="page-header">
            <h4 class="page-title">FORM DATA LAYANAN</h4>
            <div class="breadcrumb page-title-right">
                <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
                <div class="breadcrumb-item"><a href="/"> Dashboard </a></div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h4 class="float-start"></h4>
                {{-- <a href="/layanan/form" class="float-end btn btn-secondary">Tambah Data</a> --}}
                {{-- <a href="#" class="float-end btn btn-secondary">Tambah Data</a> --}}
                <button type="button" class="float-end btn btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Tambah Data
                </button>
            </div>

            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Layanan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/layanan/store" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Layanan</label>
                                    <input name="namalayanan" type="text" class="form-control">
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
            <div class="mx-4 mt-4">

                <table class="table display">
                    <thead>
                        <tr>
                            <th>Id Layanan</th>
                            <th>Nama Layanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($layanans as $layanan)
                            <tr>
                                <td> {{ $layanan->id }}
                                </td>
                                <td>
                                    {{ $layanan->jenislayanan }}
                                </td>
                                <td>
                                    {{-- <form method="POST" action="/layanan/{{ $layanan->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form> --}}
                                    {{-- <a href="/layanan/edit/{{$layanan->id}}" class="btn btn-primary btn-sm "><i class="fa fa-pencil"></i></a> --}}
                                    <button type="button" class="btn btn-primary btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#e{{$layanan->id}}">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <div class="modal fade" id="e{{$layanan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Layanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/layanan/{{ $layanan->id }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="">Nama Layanan</label>
                                                        <input name="namalayanan" value="{{$layanan->jenislayanan}}" type="text" class="form-control">
                                                    </div>
                                                
                    
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Edit Data</button>
                                                <a href="/layanan/index" class="btn btn-warning text-white">Batal</a>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>
@endsection
