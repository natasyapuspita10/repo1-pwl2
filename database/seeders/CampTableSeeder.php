<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [ 
            [
                'title'      => 'Boraa Seven',
                'slug'       => 'boraa-seven',
                'price'      => 270,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title'      => 'Luvv Bebek',
                'slug'       => 'luvv-bebek',
                'price'      => 77,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Camp::insert($camps);
    }
}