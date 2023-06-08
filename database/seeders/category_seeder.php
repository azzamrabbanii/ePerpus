<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class category_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            [
                'nama_kategori' => 'Novel'
            ],
            [
                'nama_kategori' => 'Majalah'
            ],
            [
                'nama_kategori' => 'Kamus'
            ],
            [
                'nama_kategori' => 'Komik'
            ],
            [
                'nama_kategori' => 'Manga'
            ],
            [
                'nama_kategori' => 'Ensiklopedia'
            ],
            [
                'nama_kategori' => 'Biografi'
            ],
            [
                'nama_kategori' => 'Naskah'
            ],
            [
                'nama_kategori' => 'Ligth novel'
            ]
        ]
    );
    }
}
