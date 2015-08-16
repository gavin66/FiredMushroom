<?php namespace App\Http\Controllers;



use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

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
	public function __construct()
	{

	}

	/**
	 * 主页控制器
	 *
	 * @return Response
	 */
	public function homePage()
	{
//		User::create(array('name'=>'Gavin','email'=>'em','password'=>time()));
//		$re = DB::select('select * from user');
		return view('homePage');
	}

	public function login(){
//		User::

	}


}
