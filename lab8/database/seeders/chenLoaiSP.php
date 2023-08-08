<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chenLoaiSP extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['tenLoai' => 'Samsung', 'thuTu' => 1, 'anHien' => 1],
            ['tenLoai' => 'Oppo', 'thuTu' => 2, 'anHien' => 1],
            ['tenLoai' => 'Apple', 'thuTu' => 3, 'anHien' => 1],
        ]);
    }
}
