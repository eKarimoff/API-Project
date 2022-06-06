<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'Iphone 13',
            'description'=>'The best seller',
            'price'=>'1000$',
            'active'=>false,
            'quantity'=>'12',
            'category_id'=>'1',
        ]);
        Product::create([
            'name'=>'Xiaomi 12',
            'description'=>'One of the best seller',
            'price'=>'750$',
            'active'=>true,
            'quantity'=>'15',
            'category_id'=>'1',
        ]);
        Product::create([
            'name'=>'Artel',
            'description'=>'Full HD and Full Screen',
            'price'=>'300$',
            'active'=>true,
            'quantity'=>'5',
            'category_id'=>'2',
        ]);
        Product::create([
            'name'=>'Samsung TV',
            'description'=>'The best TV',
            'price'=>'550$',
            'active'=>true,
            'quantity'=>'15',
            'category_id'=>'2',
        ]);
        Product::create([
            'name'=>'LG Air fresh',
            'description'=>'The best AC',
            'price'=>'600$',
            'active'=>false,
            'quantity'=>'15',
            'category_id'=>'3',
        ]);
    }
}
