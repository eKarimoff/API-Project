<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function products()
    {
        $product = Product::select('id','name','active','description','price','quantity')->where('active','=',1)->with(['category' => function ($q) {
           return $q->select('id','name')->where('active',true);
        }])->paginate(5);
        return ['product' => $product];
    }
}
