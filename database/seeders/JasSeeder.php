<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jas;

class JasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jas::create([
            'name' => 'Black Classic Jas',
            'description' => '[Check Deskripsi]',
            'price' => 100000,
            'image' => 'Asset/classic.jpg'
        ]);

        Jas::create([
            'name' => 'Black Tuxedo',
            'description' => '[Check Deskripsi]',
            'price' => 150000,
            'image' => 'Asset/black.jpg'
        ]);

        Jas::create([
            'name' => 'Cream Tuxedo',
            'description' => '[Check Deskripsi]',
            'price' => 150000,
            'image' => 'Asset/cream.jpg'
        ]);

        Jas::create([
            'name' => 'Mocha Tuxedo',
            'description' => '[Check Deskripsi]',
            'price' => 150000,
            'image' => 'Asset/mocha.jpg'
        ]);

        Jas::create([
            'name' => 'Grey Classic Jas',
            'description' => '[Check Deskripsi]',
            'price' => 100000,
            'image' => 'Asset/grey.jpg'
        ]);

        Jas::create([
            'name' => 'Midnight Tuxedo',
            'description' => '[Check Deskripsi]',
            'price' => 150000,
            'image' => 'Asset/midnight.jpg'
        ]);
    }
}
