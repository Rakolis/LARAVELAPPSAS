<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public function products(){
        return $this->hasOne('App\Product', 'id', 'product_id');
 
    }
    
}
