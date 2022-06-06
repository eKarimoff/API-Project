<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function myOrders()
    {
        $orders = Order::select('id', 'status')->with(['orderItems'=>function($data){
            return $data->select('order_id','quantity','price', 'product_id')->with(['product' => function($q){
                return $q->select('id', 'name');
            }]);
        }])->paginate(5);

        return ['orders'=>$orders];
    }
}
