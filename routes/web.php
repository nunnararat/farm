<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// start ----   test call api
Route::get('profiles', "Profiles@list");
// end  ----  test call api

Route::get('register', 'RegisterController@indexRegister');
// ส่วนของผู้ขาย  start
Route::get('profile','sellerController@profile');
Route::get('profile/stock','sellerController@stock');
Route::get('profile/stock/salesdetail','sellerController@salesdetail');
Route::get('profile/stock/merchandise','sellerController@merchandise');
// ส่วนของผู้ขาย  end

Route::get('/', 'HomeController@index');

Route::get('basket', 'BasketController@indexBasket');

Route::get('blog', 'BlogController@indexBlog');


Route::get('category', 'CategoryController@indexCategory');

Route::get('category_best', 'CategoryBestController@indexCategoryBest');

Route::get('category_compost', 'CategoryCompostController@indexCategoryCompost');

Route::get('category_fruit', 'CategoryFruitController@indexCategoryFruit');

Route::get('category_rice', 'CategoryRiceController@indexCategoryRice');

Route::get('category_seed', 'CategorySeedController@indexCategorySeed');

Route::get('category_soil', 'CategorySoilController@indexCategorySoil');

Route::get('category_tech', 'CategoryTechController@indexCategoryTech');

Route::get('category_vegetable', 'CategoryVegetableController@indexCategoryVegetable');


Route::get('checkout1', 'Checkout1Controller@indexCheckout1');

Route::get('checkout2', 'Checkout2Controller@indexCheckout2');

Route::get('checkout3', 'Checkout3Controller@indexCheckout3');

Route::get('checkout4', 'Checkout4Controller@indexCheckout4');




Route::get('contact', function () {
    return view('contact');
});


Route::get('customer-account', function () {
    return view('customer-account');
});

Route::get('customer-order', function () {
    return view('customer-order');
});

Route::get('customer-orders', function () {
    return view('customer-orders');
});

Route::get('customer-wishlist', function () {
    return view('customer-wishlist');
});


Route::get('detail', 'DetailController@indexDetail');


Route::get('faq', function () {
    return view('faq');
});

Route::get('post', 'PostController@indexPost');



Route::get('text-right', function () {
    return view('text-right');
});

Route::get('text', function () {
    return view('text');
});




