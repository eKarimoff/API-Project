<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'user_id'=>'1',
            'address'=>'Uzb street',
            'latitude'=>'10',
            'longitude'=>'5',
            'status'=>'delivered'
        ]);
        Order::create([
            'user_id'=>'1',
            'address'=>'Uzb street',
            'latitude'=>'20',
            'longitude'=>'15',
        ]);
        Order::create([
            'user_id'=>'1',
            'address'=>'Uzb street',
            'latitude'=>'15',
            'longitude'=>'25',
            'status'=>'canceled'
        ]);
    }
}
