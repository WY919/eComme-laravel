<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
     function index()
    {
        $data= Products::all();
        return view('product',['products'=>$data]);
    }
     function detail($id)
    {
        $data =Products::find($id);
        return view('detail',['product'=>$data]);
    }
     function search(Request $req)
    {
        $data= Products::
        where('name', 'like', '%'. $req->input('query').'%')
        ->get();
        return view('search',['products'=>$data]);
    }
     function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userID= Session::get('user')['id'];
        return Cart::where('user_id',$userID)->count();
    }
}
