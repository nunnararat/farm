<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryCompostController extends Controller
{
    //
    public function indexCategoryCompost() {
        return view('category_compost');
    }
}
