<?php

namespace App\Http\Controllers;

use App\Characteristic;
use App\Product;
use App\ProductsDetail;
use App\Store;
use App\SubCharacteristic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function showRegister()
    {
        $stores = Store::where('user_id',Auth::User()->id)->get();
        $characteristic = Characteristic::all();
        $subcharacteristic = SubCharacteristic::all();
        return view('products.registers', ['stores' => $stores, 'characts'=> $characteristic, 'subcharacts' => $subcharacteristic]);
    }

    public function registerProduct(Request $request)
    {
        $product= new Product();
        $product->name= $request->name;
        $product->image= 'https://images.assetsdelivery.com/compings_v2/mingirov/mingirov1811/mingirov181100193.jpg';
        $product->price= $request->price;
        $product->quantity_total= 0;
        $product->description= $request->description;
        $product->store_id= $request->store;
        $product->characteristics_id= $request->charact;
        $product->sub_characteristics_id_one= $this->subCategoriRandom($request);
        $product->sub_characteristics_id_two= $this->subCategoriRandom($request);
        $product->sub_characteristics_id_three= $this->subCategoriRandom($request);
        $product->save();

        return redirect('store/product/'.$product->id);

    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function subCategoriRandom(Request $request)
    {
        $subOne = SubCharacteristic::where('characteristics_id', $request->charact)->inRandomOrder()->first();
        return $subOne->id;
    }

    public function productDetail($id)
    {
        $product=Product::find($id);
        $subcharacts = SubCharacteristic::where('characteristics_id', $product->characteristics_id)->get();
        return view('products.detail',['product'=>$product, 'subcharacteristics'=> $subcharacts]);
    }

    public function insertSubcategories(Request $request, $id_pr)
    {
        $product = Product::find($id_pr);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->sub_characteristics_id_one=$request->subone;
        $product->sub_characteristics_id_two=$request->subtwo;
        $product->sub_characteristics_id_three=$request->subthree;
        $product->save();

        return redirect('store/product_detail/'.$product->id);

    }

    public function showProductDetail($id_pr)
    {
        $product= Product::find($id_pr);
        return view('products.registerdetail', ['product'=>$product]);
    }

    public function insertDetailProduct(Request $request, $id_pr)
    {
        $detail = new ProductsDetail();
        $detail->quantity= $request->quantity;
        $detail->lote= $request->lote;
        $detail->expiration_date= $request->expiration_date;
        $detail->product_id= $id_pr;
        $detail->save();

        $this->CalcQuantity($id_pr);

        return redirect('store/product_detail/'.$id_pr);
    }

    public function AllDataProduct($id_pr)
    {
        $product= Product::find($id_pr);
        $product->products_detail;
        return view('products.all_detail',['product' => $product]);
    }

    public function deleteLote($id_lote)
    {
        $detail= ProductsDetail::find($id_lote);
        $id_pr = $detail->product_id;
        $detail->delete();
        $this->CalcQuantity($id_pr);
        return back()->withInput();
    }

    public function deleteProduct($id_pr)
    {
        $detail= Product::find($id_pr);
        $detail->delete();
        return redirect('home');
    }

    /**
     * @param $id_pr
     */
    public function CalcQuantity($id_pr)
    {
        $product = Product::find($id_pr);
        $total = 0;
        foreach ($product->products_detail as $data) {
            $total = $total + $data->quantity;
        }
        $product->quantity_total = $total;
        $product->save();
    }
}
