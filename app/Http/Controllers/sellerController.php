<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sellerController extends Controller
{
    public function profile()
    {
        return view('seller-profile');
    }
    public function stock()
    {
        return view('sales-list');
    }
    public function salesdetail()
    {
        return view('sales-detail');
    }
    public function merchandise()
    {
        return view('seller-merchandise');
    }
}
