<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
// use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use App\User;
use Hash;

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
	// public function __construct(Guard $auth, Registrar $registrar)
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
		// $this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function getRegister(){
		return view('auth\register');
	}
	public function postRegister(UserRequest $request){
		$user = new User;
		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->remember_token = $request->_token;
		$user->save();
		return redirect('auth/login');
	}

	public function getLogin(){
		// echo env('ADMIN_PATH');
		return view('auth/login');
	}

	public function postLogin(LoginRequest $request){
		$auth = array(
			'email'=>$request->email, 
			'password' => $request->password,
		);
		// if(Auth::attempt($auth)){
		if($this->auth->attempt($auth)){
			// echo "<pre>";
			// print_r($request);
			// return redirect(\URL::previous());
			return redirect()->route('admin');
		}else{
			return redirect('auth/login');
		}
	}
}
