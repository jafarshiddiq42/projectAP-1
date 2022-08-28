
@extends('pages.home')
<br>
<br>
@section('content')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

<div class="main">
    <div class="page-header">
        <h4 class="page-title">FORM DATA TRANSAKSI</h4>
        <div class="breadcrumb page-title-right">
            <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
            <div class="breadcrumb-item"><a href="/"> Dashboard </a></div>
        </div>
    </div>
    <div class="card" >
        <div class="card-header">
         
            <a href="/transaksi/form" class="float-end btn btn-secondary">Tambah Data</a>
        </div>
        
        <table class="table table-light " style="width: 100%" id="example1">
          <thead >
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nofak </th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transaksi as $item)
                        <tr>
                            <td scope="row">{{$nomor++}}</td>
                            <td>{{$item->nofak}}</td>
                            <td>{{$item->tanggalkeluar}}</td>
                            <td>{{$item->serviss->namapelanggan}}</td>
                            <td>{{$item->serviss->layanans->jenislayanan}}</td>
                            <td>{{$item->harga}}</td>
                            <td>
                                <form action="/bayar/{{$item->id}}" method="post">
                                    @csrf
                                    @if ($item->status == 0)
                                        <button type="submit" class="btn btn-outline-primary">Bayar</button>
                                    @else
                                        Sudah Dibayar
                                    @endif
                                </form>
                            </td>
                            <td>
                                {{-- <a href="/transaki/edit/{{$item->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> --}}
                                {{-- <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#d{{$item->id}}">
                                    <i class="fa fa-trash"></i>
                                </button> --}}
                                <a href="/transaksi/faktur/{{$item->id}}" target="_blank" class="btn btn-danger  btn-sm" ><i class="fa fa-print"></i></a>
                                <div class="modal fade" id="d{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title text-black"  id="staticBackdropLabel">Peringatan</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-black" >
                                          Yakin Data Pelanggan <b>{{$item->serviss->namapelanggan}}</b> Ingin Di Hapus?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                          
                                          <form method="POST" action="/servis/{{$item->id}}">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>                       
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                            </td>
                        </tr>
                    @empty
                        <td colspan="12">Tidak Ada Data</td>                        
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