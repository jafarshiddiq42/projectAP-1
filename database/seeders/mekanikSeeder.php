<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class mekanikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('mekaniks')->insert([
           'namamekanik'=>'hakim',
           'alamatmekanik'=>'lampodeah',
           'no_Hp'=>'01928327',
        ]);
        DB::table('servis')->insert([
           'namapelanggan'=>'fadli',
           'mekanik_id'=>'1',
           'alamat'=>'Krueng Raya',
           'tanggalmasuk'=>date(now()),
           'telp'=>'012328327',
        ]);
        DB::table('barangs')->insert([
           'nm_barang'=>'Mesin Cuci',
           'kerusakan'=>'Mati',
           'servis_id'=>'1',
            
        ]);
    }
}
