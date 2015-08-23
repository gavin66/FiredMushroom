<?php namespace App\Http\Controllers;



use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller {

	public function __construct(){

	}

	public function login(Request $request){
		$params = $request->all();
		print_r($params);
	}

	public function post(Request $request){
		if($request->isMethod('post')){
			print_r('im gavin success');
		}else{
			print_r('sssssss');
		}

	}

}
