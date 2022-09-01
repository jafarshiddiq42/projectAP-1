
@extends('pages.home')
@section('content')


<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<div class="container mt-3 p-4">
    <div class="card">
        <div class="card-header">
            <h4 class="float-start">TAMBAH TRANSAKSI</h4>
        </div>
        <div class="card-body">
            <form method="post" action="/transaksi/store">
                @csrf   
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NOFAK</label>
                    <input type="text" name="nofak"  readonly value="{{'TRS-'.str_pad($kodejadi,4,0,STR_PAD_LEFT).date_format(date_create(date('Y-m-d')),'y')}}"
                     class="form-control @error('nofak') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('nofak')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
         
               
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Servis</label>
                    <select name="noservis" class="form-control" id="pelanggan">
                        <option value="#" value="9" selected disabled>-- pilih pelanggan --</option>
                        @foreach ($serviss as $servis)
                       
                                 <option data-barang="{{$servis->barangs->namabarang}}" value="{{$servis->id }}">{{  'SRV/'.str_pad($servis->id,4,0,STR_PAD_LEFT).'/'.date_format(date_create($servis->tanggalmasuk),'y') }}-{{ $servis->pelanggans->namapelanggan }}</option>
     
                        @endforeach
                       
                    </select>
                    @error('namapelanggan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Barang</label>
                    <input type="text" readonly id="barang"  value="{{old('jenislayanan')}}"
                     class="form-control  @error('harga') is-invalid @enderror"  id="exampleInputPassword1">
                     @error('harga')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>

         
                {{-- <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Barang</label>
                    <select name="layanan" class="form-control" id="">
                        
                        @foreach ($layanans as $layanan)
                            <option value="{{$layanan->id}}">{{ $layanan->jenislayanan }}</option>
                        @endforeach
                    </select>
                </div>  --}}
               
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                    <input readonly type="date" name="tanggalbayar" value="{{date('Y-m-d')}}"
                     class="form-control @error('tanggalkeluar') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @error('tanggalkeluar')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Harga</label>
                    <input type="text" name="harga" value="{{old('harga')}}"
                     class="form-control  @error('harga') is-invalid @enderror"  id="exampleInputPassword1">
                     @error('harga')
                     <div class="text-danger">{{$message}}</div>
                     @enderror
                </div>
                
               
               


                <button type="submit"  class="btn btn-danger t">Tambah</button>
                <a href="/transaksi/index" class="btn btn-secondary ">Batal</a>
            </form>
        </div>
    </div>
  </div>
  <script>
    $('#pelanggan').change(function () {
        $('#barang').val( $(this).find(':selected').data('barang')) ; 
        // alert($(this).val());
    })
</script>
@endsection