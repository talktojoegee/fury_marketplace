<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->user = new User();
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ],[
            'email.required'=>'Enter your registered email address',
            'email.email'=>'Enter a valid email address',
            'password.required'=>'Enter your password for this account'
        ]);
        $user = $this->user->getUserByEmail($request->email);
        if(!empty($user)){
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
                $userType = Auth::user()->is_admin;
                switch($userType){
                    case 1:
                        return redirect()->route('admin-dashboard');
                        break;
                    case 2:
                        return redirect()->route('customer-profile');
                        break;
                    case 3:
                        return redirect()->route('vendor-dashboard');
                        break;
                    default:
                        return 'hello';
                }

            }else{
                session()->flash("error", " Wrong or invalid login credentials. Try again.");
                return back();
            }
        }else{
            session()->flash("error", "There's no existing account with this login details. Try again.");
            return back();
        }
    }
}
