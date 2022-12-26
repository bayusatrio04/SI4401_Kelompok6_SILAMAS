<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'id' => $i,
                'nik' => "2347324234{$i}",
                'name' => "admin{$i}",
                'email' => "admin{$i}@example.com",
                'phone' => "0812345678{$i}",
                'address' => "Jalan Admin {$i}, Kota Admin, Provinsi Admin",
                'gender' => ['Laki-laki', 'Perempuan'][rand(0, 1)],
                'password' => Hash::make('123456'),
                'roles' => 'ADMIN'
            ]);
        }
        for ($i = 6; $i <= 15; $i++) {
            DB::table('users')->insert([
                'nik' => "317304323293{$i}",
                'name' => "petugas{$i}",
                'email' => "petugas{$i}@example.com",
                'phone' => "0812345678{$i}",
                'address' => "Jalan Petugas {$i}, Kota Petugas, Provinsi Petugas",
                'gender' => ['Laki-laki', 'Perempuan'][rand(0, 1)],
                'password' => Hash::make('123456'),
                'roles' => 'PETUGAS'
            ]);
        }
                // Insert 10 data dummy user
                for ($i = 16; $i <= 25; $i++) {
                    DB::table('users')->insert([
                        'nik' => "23325322{$i}",
                        'name' => "user{$i}",
                        'email' => "user{$i}@example.com",
                        'phone' => "0812345678{$i}",
                        'address' => "Jalan User {$i}, Kota User, Provinsi User",
                        'gender' => ['Laki-laki', 'Perempuan'][rand(0, 1)],
                        'password' => Hash::make('123456'),
                        'roles' => 'USER'
                    ]);
                }
            }

}
