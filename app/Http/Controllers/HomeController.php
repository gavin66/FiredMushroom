<?php namespace App\Http\Controllers;

class HomeController extends Controller {

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
        return view('homePage');
    }
}
