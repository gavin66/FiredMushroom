<?php
/**
 * Created by PhpStorm.
 * User: Gavin
 * Date: 2015/8/26
 * Time: 17:57
 */

namespace app\Http\Controllers;



use Illuminate\Http\Request;

class UserController extends Controller{
    public function __construct(){

    }

    public function loginAuth(Request $request){
        if($request->isMethod('post')){
            print_r($request->all());
        }
    }

}