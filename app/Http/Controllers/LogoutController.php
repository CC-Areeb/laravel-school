<?php

namespace App\Http\Controllers;


// use App\Models\User;
// use Validator;
// use Auth;
// use Illuminate\Http\Request;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

class LogoutController extends Controller
{

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();
        return redirect('/login');
    }





    // public function logout()
    // {
    //     session()->flush();
    //     auth()->guard($this->getGuard())->logout();
    //     return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/login');

    //     // auth()->logout();
    //     // return redirect('/login');
    // }
}
