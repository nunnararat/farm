<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryVegetableController extends Controller
{
    //
    public function indexCategoryVegetable() {
        return view('category_vegetable');
    }
}
