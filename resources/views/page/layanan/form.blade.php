@extends('pages.home')
@section('content')
    <div class="container mt-3 p-4">
        <div class="card">
            <div class="card-header">
                <h4 class="float-start">TAMBAH SERVIS</h4>
            </div>
            <div class="card-body m-4">
                <form method="post" action="/layanan/store">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Layanan</label>
                        <input name="namalayanan" type="text" class="form-control">
                    </div>
                    <div class="mt-3"><button type="submit" class="btn btn-danger t">Tambah</button>
                        <a href="/servis/index" class="btn btn-secondary ">Batal</a>
                    </div>


            </div>  
        </div>

        </form>
    </div>
    </div>
    </div>
@endsection
