<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Mobile',
            'active'=>true,
        ]);
        Category::create([
            'name' => 'TV',
            'active'=>true,
        ]);
        Category::create([
            'name' => 'Air Conditioner',
            'active'=>false,
        ]);
    }
}
