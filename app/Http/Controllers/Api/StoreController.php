<?php

namespace App\Http\Controllers\Api;

use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function getStores()
    {
        return Store::select('users.name AS user_name', 'stores.*')
            ->join('users', 'users.id', '=', 'stores.user_id')
            ->get();
    }
}
