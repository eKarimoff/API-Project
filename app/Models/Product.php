<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\Order;
class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class, 'id');
    }
    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
