<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryFruitController extends Controller
{
    //
    public function indexCategoryFruit() {
        return view('category_fruit');
    }
}
