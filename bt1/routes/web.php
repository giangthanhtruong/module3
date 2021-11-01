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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/input', function (){
    return view('input');
});
Route::post('/display',function (\Illuminate\Http\Request $request){
    $product = $request->product;
    $price = $request->price;
    $discount = $request->discount;
    $discountAmount = $price * $discount *0.1;
    $discountPrice = $price - $discountAmount;
    return view('display', compact(['product','price','discount','discountAmount','discountPrice']));
});
Route::get('/english', function (){
   return view('english');
});
Route::post('/tiengviet',function (\Illuminate\Http\Request $request){
    $english = $request->english;
    $data = [
      'hello'=> 'Xin chào',
      'calculator'=>'tính toán',
      'height'=>'chiều cao',
      'width'=>'chiều rộng',
      'school'=>'trường học',
    ];
    foreach ($data as $key=>$value){
        if ($english == $key){
            return view('vietnamese', compact('value'));
        }
    }

});

