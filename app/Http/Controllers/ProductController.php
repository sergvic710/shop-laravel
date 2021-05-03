<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $tags = Product::select('*')->get();
        return response()->json($tags);
    }
}
