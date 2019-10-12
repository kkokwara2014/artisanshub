<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Category;

use \Illuminate\Http\Request;

use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'userLogout']);
    }

    public function showLoginForm()
    {
        // $categories = Category::orderBy('name', 'asc')->get();
        $data = array(
            'phone' => '+ 234 813 888 3919',
            'email' => 'services@ekemarketonline.com',
            'address' => 'Amangbala Afikpo North Local Government Area'
        );
        return view('auth.login')->with($data);
    }

    protected function credentials(Request $request)
    {
        return ['email' => $request->{$this->username()}, 'password' => $request->password, 'isactive' => '1'];
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];


        // Load user from database
        $user = User::where($this->username(), $request->{$this->username()})->first();

        // Check if user was successfully loaded, that the password matches
        // and active is not 1. If so, override the default error message.
        if ($user && \Hash::check($request->password, $user->password) && $user->isactive != 1) {
            $errors = [$this->username() => trans('auth.notactivated')];
           
        }

        
        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
       
        return redirect()->back()->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }


    public function userLogout()
    {
        $this->guard()->logout();

        return redirect(url('/'));
    }
}
