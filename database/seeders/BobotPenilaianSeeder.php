<?php

namespace Database\Seeders;

use App\Models\BobotPenilaian;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BobotPenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = 1;

        $data = [
            ['certainty_term' => 'Tidak', 'cf' => 0],
            ['certainty_term' => 'Tidak Yakin', 'cf' => 0.4],
            ['certainty_term' => 'Kadang Kadang', 'cf' => 0.6],
            ['certainty_term' => 'Hampir pasti', 'cf' => 0.8],
            ['certainty_term' => 'Pasti', 'cf' => 1],
        ];

        foreach ($data as $item) {
            BobotPenilaian::create($item + ['user_id' => $user]);
        }
    }
}
