<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductToTag extends Model
{
    protected $table = 'tag_to_product';

    public function roles() {
        return $this->belongsToMany('App\Product','product','tag_id','product_id');
    }
}
