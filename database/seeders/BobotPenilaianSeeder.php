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
            ['certainty_term' => 'Pasti Tidak', 'cf' => -1],
            ['certainty_term' => 'Hampir pasti tidak', 'cf' => -0.8],
            ['certainty_term' => 'Kemungkinan besar tidak', 'cf' => -0.6],
            ['certainty_term' => 'Mungkin tidak', 'cf' => -0.4],
            ['certainty_term' => 'Tidak tahu / Tidak yakin', 'cf' => 0],
            ['certainty_term' => 'Mungkin', 'cf' => 0.4],
            ['certainty_term' => 'Kemungkinan besar', 'cf' => 0.6],
            ['certainty_term' => 'Hampir pasti', 'cf' => 0.8],
            ['certainty_term' => 'Pasti', 'cf' => 1],
        ];

        foreach ($data as $item) {
            BobotPenilaian::create($item + ['user_id' => $user]);
        }
    }
}
