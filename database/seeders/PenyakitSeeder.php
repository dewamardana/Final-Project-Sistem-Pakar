<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = 1;

        $data = [
            ['kode' => 'P001', 'nama_penyakit' => 'Depresi Ringan'],
            ['kode' => 'P002', 'nama_penyakit' => 'Depresi Sedang'],
            ['kode' => 'P003', 'nama_penyakit' => 'Depresi Berat tanpa Gejala Psikotik'],
            ['kode' => 'P004', 'nama_penyakit' => 'Depresi Berat dengan Gejala Psikotik'],
        ];

        foreach ($data as $item) {
            Penyakit::create($item + ['user_id' => $user]);
        }
    }
}
