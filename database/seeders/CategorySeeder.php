<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Harga Padi'],
            ['name' => 'Panen Jagung'],
            ['name' => 'Komoditas Sayur'],
            ['name' => 'Komoditas Buah'],
        ]);
    }
    
}
