<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products' ; 
    protected $fillable = ['title','category','price','image','detail'];
}
