<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'ProductName',
        'Reference',
        'Price',
        'Weigt',
        'product_category_id',
        'CreatedAt',
        'Stock'
    ];
    public function ProductsAndCategoryName()
    {
        # code...
    }
}
