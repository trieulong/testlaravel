<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dat', function () {
    return "Anh la dat pro, chao cac em";
});

Route::get('dang-ky', function(){
	echo  "Form dang ky thanh vien";
});

//Truyen tham so

Route::get('hoten/{ten}',
	
	function ($ten)
	{
		echo "Ten cua ban la $ten";
	}

);

Route::get('homnay/{danglam}',function($danglam){
		echo "Toi dang lam: $danglam";
})->where(['danglam'=>'[a-zA-Z]+']);

Route::get('dinhdanh',function()
{	
	echo "Day la route dinh danh";
})->name('routedinhdanh');


Route::get('haha',function(){
	return redirect()->route('routedinhdanh');
});

//Ngoai ra con do dinh danh theo nhom
Route::group([ 'prefix' => 'MyGroup' ], function(){
	Route::get('u1',function(){

		echo "MyGroup u1";
	});

	Route::get('u2',function(){

		echo "MyGroup u2";
	});

	Route::get('u3',function(){

		echo "MyGroup u3";
	});
	
});

Route::get('goicontroller','DatController@index');

Route::get('khoahoc/{ten}','DatController@thamso');

Route::get('truyenrequest','DatController@bienrequest');


Route::get('getForm',function()
	{
		return view('postForm');
	});

Route::post('postForm',['as'=>'postForm','uses'=>'DatController@hamgetpost']);




Route::get('setCookie','DatController@setCookie');
Route::get('getCookie','DatController@getCookie');


Route::get('uploadForm',function(){
	return view('uploadForm');
});


Route::post('uploadPost',['as'=>'uploadPost','uses'=>'DatController@xulyupload']);


Route::get('getJson','DatController@getJson');

Route::get('layView','DatController@layView');


Route::get('Time/{t}','DatController@truyenview');