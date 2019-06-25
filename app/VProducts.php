<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VProducts extends Model
{
    public function products_detail() {
        return $this->hasMany(ProductsDetail::class, "product_id");
    }
}
