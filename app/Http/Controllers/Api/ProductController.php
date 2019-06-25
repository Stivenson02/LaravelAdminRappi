<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\ProductsDetail;
use App\VProducts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getProduct($id_store)
    {
        $products=VProducts::where('store_id', $id_store)->get();
        return $products;
    }

    public function getLotesProduct($id_product)
    {
        $product= VProducts::find($id_product);
        $product->products_detail;
        return $product;
    }

    public function TakeProduct(Request $request)
    {
        $lote=ProductsDetail::find($request->id_lote);
        $totalq= $lote->quantity ;
        $totalq = $totalq- $request->quantity;
        $lote->quantity = $totalq;
        $lote->save();
        $calc = new \App\Http\Controllers\ProductController();
        $calc->CalcQuantity($lote->product_id);

        return ([
            "message"=>"Cantidades tomadas",
            "code" =>200
        ]);

    }
}
