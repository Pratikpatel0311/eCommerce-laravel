<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class ProductController extends Controller
{
    //
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function details($id){
        $data = Product::find($id);
        return view('details', ['product' => $data]);
    }

    function search(Request $request){
        $data = Product::where('name','like','%'.$request->input('query').'%')->get();
        return view('search', ['products' => $data]);
    }

    function addToCart(Request $request){
        if($request->session()->has('user')){
            $cart = new Cart();
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    static function cartItem(){
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartList(){
        $userId = Session::get('user')['id'];
        $data = DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();

        return view('cart', ['products' => $data]);
    }

    function removeCartItem($id){
        Cart::destroy($id);
        return redirect('/cartlist');
    }
}
