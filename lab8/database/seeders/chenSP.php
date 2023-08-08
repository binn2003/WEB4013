<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class chenSP extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('products')->insert([
                ['tenSP' => 'Oppo A' . $i, 'gia' => mt_rand(700000, 1000000)],
                ['tenSP' => 'Iphone 14 Promax ' . $i, 'gia' => mt_rand(500000, 800000)],
                ['tenSP' => 'Samsung Galaxy ' . $i, 'gia' => mt_rand(250000, 500000)],
            ]);
        } //end for
    }
}
