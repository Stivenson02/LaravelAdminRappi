<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function products_detail() {
        return $this->hasMany(ProductsDetail::class, "product_id");
    }
}
