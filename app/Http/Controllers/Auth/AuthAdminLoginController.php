<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthAdminLoginController extends Controller
{

    /**
     * Undocumented function
     *
     * @return void
     */
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function logIn(Request $request)
    {

        //Validate Form Data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);


        //Attempt to login
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            //If successful
            return redirect()->intended(route('admin.dashboard'));
        }
    
        //If unsuccesful
        return redirect()->back()->withInput($request->only('email', 'remember'));
    
        return true;
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->route('admin.login');
    }
}
