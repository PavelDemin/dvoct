<?php //namespace Demin\AuthPhpbb;
//use Config;
use Illuminate\Support\Facades\Config;
use Demin\AuthPhpbb\Classes\AuthPhpbbService;
use Illuminate\Http\Request;


Route::post('/auth-bridge/login', function () {
	if (Config::get('demin.authphpbb::client_auth') && Auth::client()->check()) {
	        $result = ['username' => Auth::client()->user()[config('laravel-phpbb-bridge.user_model.username_column')]];
	    } elseif (!config('laravel-phpbb-bridge.client_auth') && Auth::check()) {
	        $result = ['username' => Auth::user()[config('laravel-phpbb-bridge.user_model.username_column')]];
	    } else {
	        $result = [];
	    }
	return response()->json(['code' => '200', 'data' => $result]);
});

Route::get('/auth-bridge/login', function (AuthPhpbbService $authphpbbservice) {
	return $authphpbbservice->doLogin();
});


Route::delete('/auth-bridge/login', function () {
    //
});
$maxItems = Config::get('acme.demo::maxItems', 50);
?>