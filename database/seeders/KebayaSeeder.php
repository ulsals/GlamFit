<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kebaya;

class KebayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kebaya::create([
            'name' => 'Set Kebaya Lilac',
            'description' => '[Check Deskripsi]',
            'price' => 150000,
            'image' => 'Asset/lilac.png'
        ]);

        Kebaya::create([
            'name' => 'Set Kebaya Burgundy',
            'description' => '[Check Deskripsi]',
            'price' => 150000,
            'image' => 'Asset/burgundy.png'
        ]);

        Kebaya::create([
            'name' => 'Set Kebaya Greemy',
            'description' => '[Check Deskripsi]',
            'price' => 150000,
            'image' => 'Asset/greemy.png'
        ]);

        Kebaya::create([
            'name' => 'Set Kebaya Blackzy',
            'description' => '[Check Deskripsi]',
            'price' => 150000,
            'image' => 'Asset/blackzy.png'
        ]);

        Kebaya::create([
            'name' => 'Set Kebaya ivory',
            'description' => '[Check Deskripsi]',
            'price' => 150000,
            'image' => 'Asset/ivory.png'
        ]);

        Kebaya::create([
            'name' => 'Set Kebaya Amora',
            'description' => '[Check Deskripsi]',
            'price' => 150000,
            'image' => 'Asset/amora.png'
        ]);
    }
}
