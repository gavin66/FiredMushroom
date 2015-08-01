<?php namespace App\Http\Controllers;

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
        return view('homePage');
    }
}
