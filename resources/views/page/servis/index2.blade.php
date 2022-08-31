@extends('pages.home')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="main">
        <div class="page-header">
            <h4 class="page-title">FORM DATA SERVIS</h4>
            <div class="breadcrumb page-title-right">
                <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
                <div class="breadcrumb-item"><a href="/"> Dashboard </a></div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h4 class="float-start"></h4>
                <a href="/servis/form/{{ $id }}" class="float-end btn btn-secondary">Tambah Data</a>
            </div>
            <div class="mx-4 mt-4">

                <table id="example1" class="table display">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            {{-- <th scope="col">Nama Pelanggan</th> --}}
                            <th scope="col">No Service</th>
                            <th scope="col">Nama Mekanik</th>
                            <th scope="col">Jenis Layanan</th>
                            <th scope="col">Kerusakan</th>
                            <th scope="col">Tanggal Masuk</th>
                            <th scope="col">Tanggal Selesai</th>
                            <th scope="col">Status</th>
                            <th scope="col">Detail</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($serviss as $servis)
                            <tr>
                                <td scope="row">{{ $nomor++ }}</td>
                                <td scope="row">{{ 'SRV/'.str_pad($servis->id,4,0,STR_PAD_LEFT).'/'.date_format(date_create($servis->tanggalmasuk),'y') }}</td>
                                {{-- <td>{{ $servis->pelanggans->namapelanggan}}</td> --}}
                                <td>{{ $servis->mekaniks->namamekanik }}</td>
                                <td>{{ $servis->layanans->jenislayanan }}</td>
                                <td>{{ $servis->barangs->kerusakan }}</td>
                                <td class="text-center">{{ date_format(date_create($servis->tanggalmasuk ),'d-m-Y')}}</td>
                                <td class="text-center">{{ ($servis->tglselesai == null? '-':date_format(date_create($servis->tglselesai ),'d-m-Y') )}}</td>
                                <td>
                                    @if ($servis->status == 0)
                                        <span class="text-warning" style="font-weight: bold"> Sedang Dikerjakan</span>
                                    @else
                                        <span class="text-success" style="font-weight: bold"> Selesai</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="#" onclick="event.preventDefault()" data-bs-toggle="modal"
                                        data-bs-target="#b{{ $servis->id }}" class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i></a>
                                    <div class="modal fade" id="b{{ $servis->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">

                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        @if ($servis->status == 0)
                                        <span class="text-warning" style="font-weight: bold"> Sedang Dikerjakan</span>
                                    @else
                                        <span class="text-success" style="font-weight: bold"> Selesai</span>
                                    @endif
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div style="border-top: 1px solid black" class="row">
                                                        <h5>Data pelanggan</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">Nama Pelanggan</div>
                                                        <div class="col">:  {{ $servis->pelanggans->namapelanggan }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">No Hp</div>
                                                        <div class="col">:  {{ $servis->pelanggans->nohp }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">email</div>
                                                        <div class="col">:  {{ $servis->pelanggans->email }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">Alamat</div>
                                                        <div class="col">:  {{ $servis->pelanggans->alamat}}</div>
                                                    </div>
                                                   
                                                    <div style="border-top: 1px solid black" class="row">
                                                        <h5>Data Barang</h5>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">Nama Barang</div>
                                                        <div class="col">:  {{ $servis->barangs->namabarang }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">Merek</div>
                                                        <div class="col">:  {{ $servis->barangs->merk }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">No Seri</div>
                                                        <div class="col">:  {{ $servis->barangs->noseri }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">Kerusakan</div>
                                                        <div class="col">:  {{ $servis->barangs->kerusakan }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">Deskripsi</div>
                                                        <div class="col">:  {{ $servis->barangs->deskripsi }}</div>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if ($servis->status == 0)
                                         <a href="/servis/update/{{ $servis->id }}" class="btn btn-sm btn-primary">Selesai</a>
                                        
                                    @else
                                        <a href="#" class="btn btn-sm btn-success">Transaksi</a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <td colspan="8" class="text-center">Tidak Ada Data</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
