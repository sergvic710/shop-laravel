<?php

namespace App\Http\Controllers;

use App\ProductToTag;
use App\Tag;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $prods = Product::select('*')->get();
        return response()->json($prods);
    }
    public function tag(Request $request, $tag)
    {
        $tag = Tag::where('code',$tag)->first();
        $prods = ProductToTag::where('tag_id',$tag->id)->select('*')->get();
        dd($prods);
        return response()->json($tags);
    }
}
