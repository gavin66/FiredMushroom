<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
	 * ajax请求的登录
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return string json
	 */
	public function postAjaxLogin(Request $request){
		if(!$request->ajax()){
			return 'this is not post method.';
		}

		$this->validate($request, [
			'email' => 'required|email', 'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			return response()->json(['is_success'=>'1']);
		}

		return response()->json(['is_success'=>'0','error'=>$this->getFailedLoginMessage()]);
	}

	/**
	 * ajax请求的注册
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return String json
	 */
	public function postAjaxRegister(Request $request)
	{

		$validator = $this->registrar->validator($request->all());

		if ($validator->fails())
		{
			return response()->json(['is_success'=>'0','error'=>$validator->getMessageBag()->all()]);
		}

		$this->auth->login($this->registrar->create($request->all()));

		return response()->json(['is_success'=>'1']);
	}

	protected function getFailedLoginMessage()
	{
		return '用户名与密码不匹配.';
	}

}
