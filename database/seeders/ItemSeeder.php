<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('item')->insert([
            [
                'kodeBarang' => '01AAB',
                'namaBarang' => 'Camera Cannon DR45',
                'hargaBarang' => 1000,
                'deskripsiBarang' => 'Toko Camera.com',
                'satuan_id' => 1
            ],

        ]);
    }
}
