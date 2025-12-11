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
            ['certainty_term' => 'Tidak Pernah', 'cf' => 0],
            ['certainty_term' => 'Jarang', 'cf' => 0.2],
            ['certainty_term' => 'Kadang Kadang', 'cf' => 0.4],
            ['certainty_term' => 'Sering', 'cf' => 0.7],
            ['certainty_term' => 'Selalu', 'cf' => 0.9],
        ];

        foreach ($data as $item) {
            BobotPenilaian::create($item + ['user_id' => $user]);
        }
    }
}
