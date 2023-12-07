<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Topping;
use App\Models\Volume;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $volumes = Volume::all();
        $toppings = Topping::all();

        if (Auth::user()){
            return view ('order/order', [
                'products' => $products,
                'toppings' => $toppings,
                'volumes' => $volumes
            ]);
        }
        else{
            return view('post/login');
        }


    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $product = Product::where('name', $request->input('drink'))->get();
        $topping = Topping::where('name', $request->input('topping'))->get();
        $volume = Volume::where('name', $request->input('volume'))->get();

        $price = $product[0]->price + $topping[0]->price + $volume[0]->price;

        DB::table('orders')->insert([
            'product_id' => $product[0]->id,
            'topping_id'=> $topping[0]->id,
            'volume_id' => $volume[0]->id,
            'user_id' => $user_id,
            'price'=> $price,
            'created_at'=>now(),
            'updated_at' =>now(),
        ]);

        return to_route('history');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        if (Auth::user()){
            $user_id = Auth::user()->id;
            $orders = Order::where('user_id', $user_id)->get();
            return view('history/history', ['orders' => $orders]);
        }
        else{
            return view('post/login');
        }
    }
}
