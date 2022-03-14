<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        User::create([
            'name' => 'Ahmad Fauzi',
            'username' => 'fauziahmad37',
            'email' => 'fauzi.enginer@gmail.com',
            'password' => bcrypt('password')
        ]);

        Category::create([
            'name' => 'Tanaman Buah',
            'slug' => 'tanaman-buah'
        ]);

        Category::create([
            'name' => 'Tanaman Hias',
            'slug' => 'tanaman-hias'
        ]);
        
        Category::create([
            'name' => 'Pot',
            'slug' => 'pot'
        ]);

        Product::create([
            'name' => 'Durian Musangking',
            'code' => 'DRMK01',
            'image_1' => 'IMG_20190307_170051.jpg',
            'description' => 'Durian Musangking polybag 30 / 35 Tinggi 75cm sd 100cm',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Durian Bawor',
            'code' => 'DRBW01',
            'image_1' => 'IMG_20190307_170213.jpg',
            'description' => 'Durian Bawor polybag 30 / 35 Tinggi 75cm sd 100cm',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Alpukat Miki',
            'code' => 'ALMK01',
            'image_1' => 'IMG_20190316_085235.jpg',
            'description' => 'Alpukat Miki polybag 30 / 35 Tinggi 75cm sd 100cm', 
            'category_id' => 1
        ]);

        
    }
}
