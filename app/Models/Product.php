<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function products(){
        
        return $this->hasMany('App\orders_detailed','id_produk','id');
       }
    
}
