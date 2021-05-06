<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

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
}
