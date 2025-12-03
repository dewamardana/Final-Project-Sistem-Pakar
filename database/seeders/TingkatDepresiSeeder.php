<?php

namespace Database\Seeders;

use App\Models\TingkatDepresi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TingkatDepresiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $depresi = [
            [
                "kode" => "P001",
                "depresi" => "Gangguan Mood"
            ],
            [
                "kode" => "P002",
                "depresi" => "Depresi Ringan"
            ],
            [
                "kode" => "P003",
                "depresi" => "Depresi Sedang"
            ],
            [
                "kode" => "P004",
                "depresi" => "Depresi Berat"
            ],
        ];

        foreach ($depresi as $item) {
            TingkatDepresi::create($item);
        }
    }
}
