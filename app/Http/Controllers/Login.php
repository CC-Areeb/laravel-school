<?php

namespace App\Http\Controllers;

use GuzzleHttp\RetryMiddleware;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Validation\Rules\Exists;
use PhpParser\Node\Stmt\Else_;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use App\Models\Registeration;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'login_email' => ['required', 'email'],
            'login_password' => ['required'],
            'designation' => ['required|in:admin,teacher,student']
        ]);


        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'login_email' => 'The provided credentials do not match our records.',
        ]);
    }
}
