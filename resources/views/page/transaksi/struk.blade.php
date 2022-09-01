<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body onload="window.print()">
    <main>
        <style>
            @media print {
                @page {
                    size: 20cm 15cm;
                }
            }
        </style>
        <div class="bg-light overflow-hidden " style="height: 12cm;width:18cm   ;border:1px solid">
            <div class="row bg-white px-4" style="height: 2cm;border-bottom:1px solid black">
                <table style="width: 100%;font-size:20px">
                    <tr>
                        <td style="height: 1cm ;width:30%"><img src="{{ asset('assets/images/logo/logo.png') }}"
                                alt="" width="200px"></td>
                        <td class="" style="width: 70%">
                            <b> Jaya Elektronik</b>
                            

                        </td>
                        
                        <td style="width: 40%">Fadli@gmail.com</td>
                        </b>
                        <br>
                    </tr>
                </table>

            </div>
            <div class="">
                <div class="" style="font-size: 20px;padding-top:20px">
                    <b>
                        Bukti Pembayaran
                    </b>
                </div>
                <div class="row">
                    <div class="col">

                        <div class="row">
                            <div class="col">
                                Nama
                            </div>
                            <div class="col">
                                : {{ $transaksi->serviss->pelanggans->namapelanggan }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Tanggal Bayar
                            </div>
                            <div class="col">
                                : {{ $transaksi->tanggalbayar }}
                            </div>
                        </div>
                    </div>
                    <div class="col">

                        <div class="row">

                            <div class="col">
                                NOFAK
                            </div>
                            <div class="col">
                                : {{$transaksi->nofak}}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="m-3" style="padding-top: 20px">
                    <table class="table table-bordered"
                        style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                        <thead class=" text-white" style="background-color: rgb(132, 129, 129)">
                            <tr>
                                <th>No</th>
                                <th>Jenis Barang</th>
                                <th>Deskripsi</th>
                                <th>Tangal Masuk</th>
                                <th>Tangal Keluar</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th style="width: 20%">{{ $transaksi->serviss->barangs->namabarang }}</th>
                                <th style="text-align: center">{{ $transaksi->serviss->barangs->deskripsi }}</th>
                                <th>{{ $transaksi->serviss->tanggalmasuk }}</th>
                                <th>{{ $transaksi->serviss->tglselesai }}</th>
                                <th>{{ 'Rp. '.$transaksi->harga }}</th>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-center" ><b>Total</b></td>
                                <td colspan="5"  ><b>{{' Rp. '.$transaksi->harga  }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


    </main>
</body>

</html>
