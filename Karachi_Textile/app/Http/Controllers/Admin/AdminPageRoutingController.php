<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPageRoutingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('/Admin/dashboard');
    }
    public function login()
    {
        return view('/Admin/login');
    }
    public function products()
    {
        return view('/Admin/products');
    }
    
    public function addProduct()
    {
        //  echo "asasas";
        return view('/Admin/addProduct');
    }
    public function editProduct($id=null,$title=null,$category=null,$price=null,$image=null,$detail=null)
    {
        return view('/Admin/editProduct',compact('id','title','category','price','image','detail'));
    }

    public function searchProduct()
    {
        return view('/Admin/searchProduct');
    }

    public function orders()
    {
        return view('/Admin/orders');
    }
    public function messages()
    {
        return view('/Admin/messages');
    }

}
