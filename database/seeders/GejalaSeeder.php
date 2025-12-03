<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gejala = [
            ["kode" => "G001", "gejala" => "Sering Merasa Sedih"],
            ["kode" => "G002", "gejala" => "Sering kelelahan melakukan aktifitas ringan"],
            ["kode" => "G003", "gejala" => "Kurang konsentrasi dalam belajar"],
            ["kode" => "G004", "gejala" => "Mudah merasa bosan"],
            ["kode" => "G005", "gejala" => "Sering Melamun"],
            ["kode" => "G006", "gejala" => "Tidak semangat melakukan sesuatu"],
            ["kode" => "G007", "gejala" => "Merasa Risau"],
            ["kode" => "G008", "gejala" => "Pesimis"],
            ["kode" => "G009", "gejala" => "Sering menangis secara tiba-tiba"],
            ["kode" => "G010", "gejala" => "Gangguan susah Tidur"],
            ["kode" => "G011", "gejala" => "Merasa Cemas Berlebihan"],
            ["kode" => "G012", "gejala" => "Kecewa dengan diri sendiri"],
            ["kode" => "G013", "gejala" => "Terganggu dengan banyak hal"],
            ["kode" => "G014", "gejala" => "Sering murung"],
            ["kode" => "G015", "gejala" => "Kehilangan minat terhadap hoby"],
            ["kode" => "G016", "gejala" => "Merasa kesepian"],
            ["kode" => "G017", "gejala" => "Sering merasa bersalah"],
            ["kode" => "G018", "gejala" => "Merasa dihakimi"],
            ["kode" => "G019", "gejala" => "Membenci Diri Sendiri"],
            ["kode" => "G020", "gejala" => "Mudah tersinggung"],
            ["kode" => "G021", "gejala" => "Kehilangan Nafsu makan"],
            ["kode" => "G022", "gejala" => "Khawatir tentang penampilan"],
            ["kode" => "G023", "gejala" => "Mudah Marah"],
            ["kode" => "G024", "gejala" => "Suka menyendiri"],
            ["kode" => "G025", "gejala" => "Pikiran Untuk Bunuh Diri"],
            ["kode" => "G026", "gejala" => "Sulit mengambil keputusan"],
            ["kode" => "G027", "gejala" => "Sulit melakukan kegiatan dengan Baik"],
            ["kode" => "G028", "gejala" => "Ada penambahan dan penurunan berat badan"],
            ["kode" => "G029", "gejala" => "Kurang percaya diri"],
        ];

        foreach ($gejala as $item) {
            Gejala::create($item);
        }
    }
}
