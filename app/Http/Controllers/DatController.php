<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;

class DatController extends Controller
{
    public function xinchao()
    {
    	$now=date("Y-m-d");
    	echo "Xin chao, toi la controller. Hom nay la: $now";
    }

    public function index()
    {
    	echo "Day la ham index cua DatController <br>";
    
    }

    public function thamso($ten)
    {
    	echo "Day la khoc hoc: $ten";

    	if($ten=="Laravel"){
    		echo "<br> Chuc mung chu, tim dung do choi roi do";
    	}
    	else
    	{
    		echo "<br> Khong phai trong tam";
    	}
    }

    public function bienrequest(Request $bienquest)
    {
    	//return $bienquest->url();

    	if($bienquest->isMethod('post'))
    		echo "Day la phuong thuc post";
    	else
    		echo "Khong phai phuong thuc post";
    }

    public function hamgetpost(Request $bienrequest)
    {

    	if($bienrequest->has('HoTen')){

    	$hoten=$bienrequest->HoTen;
    	echo $hoten;
    	} else {

    		echo "Khong co tham so";
    	}
    }

    public function setCookie(){
    	$response =  new Response;
    	$response->withCookie('admin','Tan Dat la admin',1);
    	return $response;
    }

    public function getCookie(Request $bienrequest){
    		return $bienrequest->cookie('admin');
    }

    public function xulyupload(Request $bienrequest)
    {
    	if($bienrequest->hasFile('myFile')){
    		
    		$file=$bienrequest->file('myFile');
    		$filename=$file->getClientOriginalName('myFile');
    		$file->move('img',$filename);

    		echo "Upload thanh cong";
    		
    	} else {
    		echo "Chua co file";	
    	}
    }


    public function getJson()
    {
    	$arr=['Laravel','PHP','Tan Dat Duong','ASP.net','HTML'];

    	return response()->json($arr);
    }


    public function layView()
    {
    	return view('pagecon.Pagacon');
    }

    public function truyenview($t){
    	return view('myView',['tenbiensedung'=>$t]);
    }


}
