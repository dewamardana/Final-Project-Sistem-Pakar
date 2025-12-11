<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = 1; // sesuaikan jika perlu

        $data = [
            // Gejala Utama
            ['kode' => 'G001', 'nama_gejala' => 'Perasaan sedih atau tertekan', 'kategori' => 'utama', 'bobot_awal' => 0.60],
            ['kode' => 'G002', 'nama_gejala' => 'Kehilangan minat dan kegembiraan', 'kategori' => 'utama', 'bobot_awal' => 0.65],
            ['kode' => 'G003', 'nama_gejala' => 'Berkurangnya energi dan mudah lelah', 'kategori' => 'utama', 'bobot_awal' => 0.60],

            // Gejala Lain
            ['kode' => 'G004', 'nama_gejala' => 'Konsentrasi dan perhatiannya berkurang', 'kategori' => 'lain', 'bobot_awal' => 0.30],
            ['kode' => 'G005', 'nama_gejala' => 'Harga diri dan kepercayaan diri berkurang', 'kategori' => 'lain', 'bobot_awal' => 0.60],
            ['kode' => 'G006', 'nama_gejala' => 'Gagasan rasa bersalah dan tidak berguna', 'kategori' => 'lain', 'bobot_awal' => 0.40],
            ['kode' => 'G007', 'nama_gejala' => 'Pandangan masa depan suram dan pesimistis', 'kategori' => 'lain', 'bobot_awal' => 0.50],
            ['kode' => 'G008', 'nama_gejala' => 'Gagasan atau tindakan bunuh diri', 'kategori' => 'lain', 'bobot_awal' => 0.70],
            ['kode' => 'G009', 'nama_gejala' => 'Tidur terganggu', 'kategori' => 'lain', 'bobot_awal' => 0.30],
            ['kode' => 'G010', 'nama_gejala' => 'Nafsu makan berkurang', 'kategori' => 'lain', 'bobot_awal' => 0.35],

            // Gejala Berat
            ['kode' => 'G011', 'nama_gejala' => 'Gelisah atau justru bergerak lebih lambat dari biasanya', 'kategori' => 'berat', 'bobot_awal' => 0.55],
            ['kode' => 'G012', 'nama_gejala' => 'Gejala psikosis atau stupor, seperti waham, halusinasi, atau kondisi sangat diam hingga sulit berinteraksi', 'kategori' => 'berat', 'bobot_awal' => 0.70],
        ];

        foreach ($data as $item) {
            Gejala::create($item + ['user_id' => $user]);
        }
    }
}
