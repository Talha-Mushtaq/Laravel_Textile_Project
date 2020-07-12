<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPageRoutingController extends Controller
{
    public function home()
    {
        return view('/User/home');
    }

    public function whoWeAre()
    {
        return view('/User/whoWeAre');
    }

    public function products()
    {
        return view('/User/shop-sidebar');
    }

    public function industryUnits()
    {
        return view('/User/industryUnits');
    }

    public function dailyProduction()
    {
        return view('/User/production');
    }
    
    public function outlet()
    {
        return view('/User/outlet');
    }
   
    public function contact()
    {
       return view('/User/contact');
    }
    
    public function productSinglePage()
    {
       return  view('/User/productSinglePage');
    }

    public function cart()
    {
        return view('/User/cart');
    }

    
    public function checkOut()
    {
        return view('/User/checkOut');
    }

    
    public function purchaseConfirmation()
    {
        return view('/User/purchaseConfirmation');
    }
    
}
