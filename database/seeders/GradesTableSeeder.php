<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradesTableSeeder extends Seeder
{
    public function run(): void
    {
        $grades = [];

        // Kyu grades: 10th to 1st (rank_order 10 down to 1)
        for ($i = 10; $i >= 1; $i--) {
            $grades[] = [
                'label' => "{$i}th Kyu",
                'rank_order' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Dan grades: 1st to 4th (rank_order 11 to 14)
        for ($i = 1; $i <= 7; $i++) {
            $suffix = match($i) {
                1 => 'st',
                2 => 'nd',
                3 => 'rd',
                default => 'th',
            };

            $grades[] = [
                'label' => "{$i}{$suffix} Dan",
                'rank_order' => 10 + $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('grades')->insert($grades);
    }
}
