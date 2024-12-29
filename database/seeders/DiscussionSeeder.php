<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscussionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('discussions')->insert([
            [
                'title' => 'Harga Padi Terkini',
                'content' => 'Bagaimana harga padi di daerah Anda saat ini?',
                'category_id' => 1,
            ],
            [
                'title' => 'Panen Jagung di Jawa',
                'content' => 'Diskusi tentang ketersediaan jagung di musim panen ini.',
                'category_id' => 2,
            ],
        ]);
    }
    
}
