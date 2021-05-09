<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request) {
        $cartItems = Cart::getCart();
        return response()->json($cartItems);
    }
    public function add(Request $request) {
        $id = $request->get('id');
        $qny = $request->get('qny');
        $cartModel = new Cart();
        $cartModel->addItem($id, $qny);
    }
    public function delete(Request $request, $id) {
        Cart::destroy($id);
    }
    public function update(Request $request) {
        $id = $request->get('id');
        $qny = $request->get('qny');
        Cart::updateItem($id, $qny);
    }
}
