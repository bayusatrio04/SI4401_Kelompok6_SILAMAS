<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
class PengaduansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
        {
            // Insert 50 data dummy pengaduan
            for ($i = 1; $i <= 50; $i++) {
                $user_nik = DB::table('users')->inRandomOrder()->first()->nik;
                $user_id = DB::table('users')->where('nik', $user_nik)->first()->id;
                $name = DB::table('users')->inRandomOrder()->first()->name;
                $type = ['Penduan', 'Aspirasi', 'Lainnya'][rand(0, 2)];
                $description = "Deskripsi pengaduan {$i}";
                $image = "image_{$i}.jpg";
                $lokasi = "Lokasi pengaduan {$i}";
                $tanggal_kejadian = "2022-01-0{$i}";
                $secret = ['Tidak', 'Ya'][rand(0, 1)];
                $status = 'Pending';

                DB::table('pengaduans')->insert([
                    'user_nik' => $user_nik,
                    'user_id' => $user_id,
                    'name' => $name,
                    'type' => $type,
                    'description' => $description,
                    'image' => $image,
                    'lokasi' => $lokasi,
                    'tanggal_kejadian' => $tanggal_kejadian,
                    'secret' => $secret,
                    'status' => $status
                ]);
            }
        }

}
