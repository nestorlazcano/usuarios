<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public function index()
    {
      $products = \App\Models\Product\Product::
                        select('products.id', 'products.name as product', 'products.price', 'marks.name as mark')->join('marks','marks.id','=','products.marks_id')->get();
      return view('Product/Product')->with('products', $products);
    }

}
