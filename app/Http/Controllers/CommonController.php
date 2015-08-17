<?php namespace App\Http\Controllers;



use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| 主页连接的所有控制器
	|--------------------------------------------------------------------------
	*/

	/**
	 * 新建控制器实例
	 * 中间件
	 * @return void
	 */
	public function __construct(){

	}

	public function login(Request $request){
		$params = $request->all();
		print_r($params);
	}

}
