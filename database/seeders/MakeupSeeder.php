<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Makeup;

class MakeupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Makeup::create([
            'name' => 'Natural Make Up',
            'price' => 100000,
            'image' => 'Asset/Natural.png',
        ]);

        Makeup::create([
            'name' => 'Flawless Make Up',
            'price' => 150000,
            'image' => 'Asset/Flawless.png',
        ]);

        Makeup::create([
            'name' => 'Korean Make Up',
            'price' => 150000,
            'image' => 'Asset/korean.png',
        ]);

        Makeup::create([
            'name' => 'Bold Make Up',
            'price' => 250000,
            'image' => 'Asset/bold.png',
        ]);

        Makeup::create([
            'name' => 'Douyin Make Up',
            'price' => 150000,
            'image' => 'Asset/douyin.png',
        ]);

        Makeup::create([
            'name' => 'Latina Make Up',
            'price' => 150000,
            'image' => 'Asset/Latina.png',
        ]);
    }
}
