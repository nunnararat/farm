<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    function list() {
        // $data =  Http::get('https://www.themealdb.com/api/json/v1/1/search.php?f=a')->json();

        $data =  Http::get('http://www.json-generator.com/api/json/get/ccLAsEcOSq?indent=1')->json();

        // $data =  Http::get('https://jsonplaceholder.typicode.com/posts')->json();

        return view('profiles', ['data'=>$data]);
    }
}
