<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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

        
    }
}
