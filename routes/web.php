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
    return view('dictionary');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request) {
    $dictionary = $request->input('dictionary');
    $englist = ['hello'=>'xin chao', 'bye'=>'tam biet', 'car'=>'o to', 'cat'=>'meo', 'dog'=>'cho', 'human'=>'con nguoi'];

    foreach ($englist as $key => $value) {
        if ($dictionary == $key) {
            return view('/translate', compact('value'));
        }
    }
});
