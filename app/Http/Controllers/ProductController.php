<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Orders;

class ProductController extends Controller
{
    //show all products
    public function index()
    {
        $products = Product::paginate(8);
        return view('products', compact('products'));
    }

    //show orders in cart
    public function cart()
    {
        return view('cart');
    }

    // save order in db
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email'=> 'required',
            'total'=> 'required',
        ]);

        Orders::create($request->all()); 

        $request->session()->flush();

        return redirect('/')->with('success', 'Product is order to successfully!');
    }

    // add product to cart
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    //update product in cart
    public function update(Request $request)
    { 
        if($request->id && $request->quantity){
        $cart = session()->get('cart');
        $cart[$request->id]["quantity"] = $request->quantity;
        session()->put('cart', $cart);
        session()->flash('success', 'Cart updated successfully');
    }
    }

    //removve product in cart
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
