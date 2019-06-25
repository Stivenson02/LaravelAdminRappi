<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function showRegister()
    {
        return view('store.registers');
    }

    public function registerStore(Request $request)
    {
        $store = new Store();
        $store->name = $request->name;
        $store->logo = "http://www.userlogos.org/files/logos/Ti%20Khal/Playstation%20Store.png";
        $store->nit = $request->nit;
        $store->address = $request->address;
        $store->city = $request->city;
        $store->country = $request->country;
        $store->phone = $request->phone;
        $store->user_id = Auth::User()->id;
        $store->save();

        return redirect('home');
    }

    public function storeDetail($id)
    {
        $store=Store::find($id);
        $products= $store->products;

        return view('products.index', ['products' => $products, 'store'=>$store]);
    }

    public function deleteStore($id_st)
    {
        $detail= Store::find($id_st);
        $detail->delete();
        return back()->withInput();
    }
}
