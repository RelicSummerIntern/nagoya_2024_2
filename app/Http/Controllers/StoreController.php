<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View;

class StoreController extends Controller
{
    //
    public function create()
    {
        return view('stores.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'genre_id' => ['required', 'integer'],
        //     'opening_year' => ['required', 'integer'],
        //     'opening_month' => ['required', 'integer'],
        //     'opening_day' => ['required', 'integer'],
        //     'postal_code' => ['required', 'string', 'max:255'],
        //     'prefecture' => ['required', 'string', 'max:255'],
        //     'address' => ['required', 'string', 'max:255'],
        //     'building_name' => ['nullable', 'string', 'max:255'],
        //     'phone_number' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255'],
        //     'image_url' => ['nullable', 'string', 'max:255'],
        //     'discription' => ['nullable', 'string'],
        // ]);
        
        $Store = Store::create([
            'name' => $request->name,
            'genre_id' => $request->genre_id,
            'opening_year' => $request->opening_year,
            'opening_month' => $request->opening_month,
            'opening_day' => $request->opening_day,
            'postal_code' => $request->postal_code,
            'prefecture' => $request->prefecture,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'image_url' => $request->image_url,
            'discription' => $request->discription,
        ]);
        

        event(new Registered($Store));

        Auth::guard('store')->login($Store);

        session()->flash('success', '会員登録に成功しました。');

        return redirect(RouteServiceProvider::HOME);
    }


    public function index($id)
    {
        $store = Store::find($id);
        return view('storesmypage', ['store' => $store]);
    }

    public function show($id)
    {
        $store = Store::find($id);
        return view('users-storespage', ['store' => $store]);
    }


}
