<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    //
    public function create()
    {
        return view('stores.create');
    }
    public function index($id)
    {
        $store = Store::find($id);
        return view('storesmypage', ['store' => $store]);
    }
}
