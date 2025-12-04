<?php

namespace Database\Seeders;

use App\Models\Aturan;
use App\Models\Penyakit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = 1; // User ID default untuk seeder

        $data = [
            ['penyakit_kode' => 'P001', 'min_gejala_utama' => 2, 'min_gejala_lain' => 2, 'g011' => false, 'g012' => false],
            ['penyakit_kode' => 'P002', 'min_gejala_utama' => 2, 'min_gejala_lain' => 3, 'g011' => false, 'g012' => false],
            ['penyakit_kode' => 'P003', 'min_gejala_utama' => 3, 'min_gejala_lain' => 4, 'g011' => true,  'g012' => false],
            ['penyakit_kode' => 'P004', 'min_gejala_utama' => 3, 'min_gejala_lain' => 4, 'g011' => true,  'g012' => true],
        ];

        $counter = 1; // Untuk kode aturan otomatis (R001, R002, ...)

        foreach ($data as $item) {
            $penyakit = Penyakit::where('kode', $item['penyakit_kode'])->first();

            if (!$penyakit) {
                // Skip jika kode penyakit tidak ditemukan
                continue;
            }

            // Buat kode aturan otomatis jika perlu
            $kodeAturan = 'R' . str_pad($counter, 3, '0', STR_PAD_LEFT);
            $counter++;

            Aturan::create([
                'kode' => $kodeAturan,
                'user_id' => $userId,
                'penyakit_id' => $penyakit->id,
                'min_gejala_utama' => $item['min_gejala_utama'],
                'min_gejala_lain' => $item['min_gejala_lain'],
                'wajib_g011' => $item['g011'],
                'wajib_g012' => $item['g012'],
            ]);
        }
    }
}
