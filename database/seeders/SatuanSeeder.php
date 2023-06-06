<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'kode_satuan' => 'Kg',
                'nama_satuan' => 'Kilogram',
            ],
            [
                'kode_satuan' => 'G',
                'nama_satuan' => 'Gram',
            ],
            [
                'kode_satuan' => 'Inch',
                'nama_satuan' => 'Inchi',
            ],
            [
                'kode_satuan' => 'Ton',
                'nama_satuan' => 'Ton',
            ],
            [
                'kode_satuan' => 'L',
                'nama_satuan' => 'Liter',
            ],
            [
                'kode_satuan' => 'M',
                'nama_satuan' => 'Meter',
            ],


        ]);
    }
}
