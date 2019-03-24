<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function warehouse()
    {
        return $this->belongsToMany('App\Warehouse')->withPivot('product_id', 'warehouse_id');
    }
}
