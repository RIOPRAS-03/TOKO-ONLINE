<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Ari Mokti Zam Zam',
            'email' => 'armuzam24@gmail.com',
            'role' => '1',
            'status' => 1,
            'hp' => '0895373221800',
            'password' => bcrypt('19231343'),
        ]);
        User::create([
            'nama' => 'Dandi Mardiansyah',
            'email' => 'Dandimar@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '089512331234',
            'password' => bcrypt('19231111'),
        ]);
        User::create([
            'nama' => 'Dhimas',
            'email' => 'Dhimas@gmail.com',
            'role' => '2',
            'status' => 1,
            'hp' => '089693339118',
            'password' => bcrypt('19232011'),
        ]);
        #data kategori
        kategori::create([
            'nama_kategori' => 'SAMPOERNA FEST PONTIANAK'
        ]);
        kategori::create([
            'nama_kategori' => 'PLAY MUSIC PONTIANAK'
        ]);
        kategori::create([
            'nama_kategori' => 'MUSIKULI PONTIANAK'
        ]);
        kategori::create([
            'nama_kategori' => 'GENERASI HAPPY PONTIANAK'
        ]);
        kategori::create([
            'nama_kategori' => 'FLAME FEST'
        ]);
    }
}
