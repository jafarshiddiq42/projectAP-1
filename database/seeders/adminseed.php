<?php

namespace Database\Seeders;

use App\Models\Layanan;
use App\Models\Mekanik;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class adminseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            //  [
            //      'name'=>'admin',
            //      'email'=>'admin@jafar.com',
            //      'is_admin'=>'1',
            //      'password'=>bcrypt('12345'),
            //  ],
             [
                 'name'=>'admin',
                 'email'=>'admin@fadli.com',
                 'password'=>bcrypt('12345678'),
             ],
            //  [
            //      'name'=>'admin',
            //      'phone'=>'user@jafar.com',
            //      'checkpin'=>true,
            //      'is_admin'=>'0',
            //      'password'=>bcrypt('12345'),
            //  ],
                  
         ];

        $mekanik=[
            [
                'namamekanik'=>'evan',
                'alamatmekanik'=>'Aceh Besar',
                'no_Hp'=>'01921231',
            ]
            ];
        $layanan=[
            [
                'jenislayanan'=>'printer',
              
            ]
            ];
         foreach ($user as $key => $value) {
            User::create($value);  
          }
         foreach ($mekanik as $key => $value) {
            Mekanik::create($value);  
          }
         foreach ($layanan as $key => $value) {
            Layanan::create($value);  
          }
    }
    
}
