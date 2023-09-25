<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Apa Itu Bahagia?',
            ],
            [
                'camp_id' => 1,
                'name' => 'Mengenal Kebahagiaan',
            ],
            [
                'camp_id' => 1,
                'name' => 'Kesedihan Itu Apa?',
            ],
            [
                'camp_id' => 1,
                'name' => 'Bagaimana Jika Tidak Ada Kesedihan?',
            ],
            [
                'camp_id' => 1,
                'name' => 'Bahagia Berasal Dari Mana?',
            ],
            [
                'camp_id' => 1,
                'name' => 'Mengenali Perasaan Diri Sendiri',
            ],
            [
                'camp_id' => 1,
                'name' => 'Bagaimana Cara Untuk Bahagia?',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pada Akhirnya, Kita Membutuhkannya',
            ],
            [
                'camp_id' => 2,
                'name' => 'Mengenal Bebek',
            ],
            [
                'camp_id' => 2,
                'name' => 'Cara Merawat Bebek',
            ],
            [
                'camp_id' => 2,
                'name' => 'Kenali Cara Mengenali Penyakit Pada Bebek',
            ],
            [
                'camp_id' => 2,
                'name' => 'Alasan Mengapa Bebek Menggemaskan',
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
