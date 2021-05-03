<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index(Request $request)
    {
        $tags = Tag::select('*')->get();
        return response()->json($tags);
    }
}
