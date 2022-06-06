<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function myOrders()
    {
        $orders = Order::select('id', 'status')->with('orderItems')->get();

        return ['orders'=>$orders];
    }
}
