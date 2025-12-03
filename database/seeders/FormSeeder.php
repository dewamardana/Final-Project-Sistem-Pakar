<?php

namespace Database\Seeders;

use App\Models\Gejala;
use App\Models\JawabanMaster;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cf_user = [
            0.0,
            0.2,
            0.4,
            0.6,
            0.8,
            1.0
        ];

        $gejalas = Gejala::all();
        $jawabans = JawabanMaster::all();

        foreach ($gejalas as $gejala) {
            foreach ($jawabans as $index => $jawaban) {
                // Ambil nilai berdasarkan urutan, jika index lebih dari cf_user, pakai nilai terakhir
                $nilai = $cf_user[$index] ?? end($cf_user);

                // Attach jawaban ke gejala dengan nilai pivot
                $gejala->jawabans()->syncWithoutDetaching([
                    $jawaban->id => ['nilai' => $nilai]
                ]);
            }
        }
    }
}
