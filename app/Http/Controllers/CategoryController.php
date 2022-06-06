<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{

    public function category()
    {
        $category = Category::select('id','name')->where('active', true)->get();
        return ['category' => $category];
    }
}
