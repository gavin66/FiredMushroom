<?php namespace App\Http\Controllers;



use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| ��ҳ���ӵ����п�����
	|--------------------------------------------------------------------------
	*/

	/**
	 * �½�������ʵ��
	 * �м��
	 * @return void
	 */
	public function __construct(){

	}

	public function login(Request $request){
		$params = $request->all();
		print_r($params);
	}

}
