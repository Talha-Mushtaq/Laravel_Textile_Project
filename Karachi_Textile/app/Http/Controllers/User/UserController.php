<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ProductModel;

class UserController extends Controller
{
    public function sidebarProduct()
    {

        $products = ProductModel::all();

        return view('User/shop-sidebar')->with('products', $products);

    }


    public function productSinglePage($id)
    {
        $products = ProductModel::all()->where('id','=',$id);

        return view('User/productSinglePage')->with('products', $products);
           
          
    }

    public function addToCart(ProductModel $Product)
    {
        // $Product = ProductModel::find($id);
        // dd($Product);
        //add to cart

        // Cart::session(auth()->id)->add(array(
            
        //     'id' => $Product->id,
        //     'title' => $Product->title,
        //     'category' => $Product->category,
        //     'price' => $Product->price,
        //     'image' => $Product->image,
        //     'detail' => $Product->detail,
        //     'quantity' => 4,
        //     'attributes' => array(),
        //     'associatedModel' => $Product
        
        // ));

        // return redirect()->route('Shop-sidebar');
    }

}
