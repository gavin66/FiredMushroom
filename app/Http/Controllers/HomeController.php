<?php namespace App\Http\Controllers;



use App\User;
use Illuminate\Support\Facades\DB;

class homeController extends Controller {

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
	public function __construct()
	{

	}

	/**
	 * ��ҳ������
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
