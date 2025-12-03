<?php

namespace Database\Seeders;

use App\Models\JawabanMaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jawaban = [
            [
                'nama' => 'Tidak Tahu'
            ],
            [
                'nama' => 'Tidak Yakin'
            ],
            [
                'nama' => 'Mungkin'
            ],
            [
                'nama' => 'Kemungkinan Besar'
            ],
            [
                'nama' => 'Hampir Pasti'
            ],
            [
                'nama' => 'Pasti'
            ],
        ];

        foreach ($jawaban as $item) {
            JawabanMaster::create($item);
        }
    }
}
