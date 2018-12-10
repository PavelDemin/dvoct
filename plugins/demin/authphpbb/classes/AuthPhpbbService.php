<?php namespace Demin\AuthPhpbb\Classes;

use Illuminate\Support\Facades\Config;
use Auth;
use Illuminate\Http\Request;

class AuthPhpbbService {
	public function _validateCredentials($username, $password)
    {
        $username = trim($username);
        $password = trim($password);
     /*   if (Config::get('demin.authphpbb::client_auth') && Auth::client()->attempt([Config::get('demin.authphpbb::user_model.username_column') => $username, Config::get('demin.authphpbb::user_model.password_column') => $password])
            || (!Config::get('demin.authphpbb::client_auth') && Auth::attempt([Config::get('demin.authphpbb::user_model.username_column') => $username, Config::get('demin.authphpbb::user_model.password_column') => $password]))
        ) {
            return (Config::get('demin.authphpbb::client_auth')) ? Auth::client()->user() : Auth::user();
        }*/
        //return false;
         $user = Auth::findUserByLogin(array($username));
         return $user;
    }

    public function doLogin() {
    	  $request = new Request;
				$appkey = $request->input('appkey');
        $username = $request->input('username');
        $password = $request->input('password');
        echo $appkey.$username.$password;
        if ($appkey !== Config::get('demin.authphpbb::appkey')) {
            return response()->json(['code' => '400', 'msg' => 'Invalid API Key', 'data' => []]);
        }
        if ($data = AuthPhpbbService::_validateCredentials($username, $password)) {
            return response()->json(['code' => '200', 'msg' => 'success', 'data' => $data]);
        }
        return response()->json(['code' => '400', 'msg' => 'Invalid username or password', 'data' => []]);
    }
}

?>