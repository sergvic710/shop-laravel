<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    public function addItem($id, $qny) {
        $prodModel = Product::find($id);
        if( $prodModel ) {
            $this->product_id = $id;
            $this->amount = $qny;
            $this->price = $prodModel->price;
            $this->sum = $prodModel->price * $qny;
            $this->save();
        }
    }
    static public function updateItem($id, $qny) {
        $cartModel = Cart::find($id);
        $cartModel->amount = $qny;
        $cartModel->sum = $cartModel->price * $qny;
        $cartModel->save();
    }
    static public function getCart() {
        $cartItems = Cart::all();
        $cartRows = [];
        $allSum =0;
        foreach ($cartItems as $item ) {
            $prodModel = Product::find($item['product_id']);
            $cartRows [] = [
                'id' => $item['id'],
                'name' => $prodModel['name'],
                'qny' => $item['amount'],
                'price' => $item['price'],
                'sum' => $item['sum'],
            ];
            $allSum += $item['sum'];
        }
        $cart ['rows'] = $cartRows;
        $cart ['allsum'] = $allSum;

        return $cart;
    }
}
