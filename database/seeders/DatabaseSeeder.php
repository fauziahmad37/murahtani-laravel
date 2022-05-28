<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Inventory;
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
            'image_1' => 'products/IMG_20190307_170051.jpg',
            'image_2' => 'products/IMG_20190307_170213.jpg',
            'image_3' => 'products/IMG_20190316_085235.jpg',
            'description' => 'Durian Musangking polybag 30 / 35 Tinggi 75cm sd 100cm',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Durian Bawor',
            'code' => 'DRBW01',
            'image_1' => 'products/IMG_20190307_170213.jpg',
            'image_2' => 'products/IMG_20190307_170051.jpg',
            'image_3' => 'products/IMG_20190316_085235.jpg',
            'description' => 'Durian Bawor polybag 30 / 35 Tinggi 75cm sd 100cm',
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Alpukat Miki',
            'code' => 'ALMK01',
            'image_1' => 'products/IMG_20190316_085235.jpg',
            'image_2' => 'products/IMG_20190307_170051.jpg',
            'image_3' => 'products/IMG_20190307_170213.jpg',
            'description' => 'Alpukat Miki polybag 30 / 35 Tinggi 75cm sd 100cm', 
            'category_id' => 1
        ]);

        Inventory::create([
            'product_id' => 1,
            'sell_price' => 50000,
            'average_buy_price' => 25000,
            'first_stock' => 5,
            'first_amount' => 125000,
            'stock_in' => 0,
            'in_amount' => 0,
            'stock_out' => 0,
            'out_amount' => 0,
            'last_stock' => 5,
            'last_amount' => 125000
        ]);

        Inventory::create([
            'product_id' => 2,
            'sell_price' => 75000,
            'average_buy_price' => 45000,
            'first_stock' => 1,
            'first_amount' => 45000,
            'stock_in' => 0,
            'in_amount' => 0,
            'stock_out' => 0,
            'out_amount' => 0,
            'last_stock' => 1,
            'last_amount' => 45000
        ]);

        Inventory::create([
            'product_id' => 3,
            'sell_price' => 100000,
            'average_buy_price' => 50000,
            'first_stock' => 2,
            'first_amount' => 100000,
            'stock_in' => 0,
            'in_amount' => 0,
            'stock_out' => 0,
            'out_amount' => 0,
            'last_stock' => 2,
            'last_amount' => 100000
        ]);
    }
}
