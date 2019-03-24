<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('product_id', 'warehouse_id');
    }
}
