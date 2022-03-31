<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            // exists (is the method of laravel):table_name, column_name
            'password' => 'required|exists:registers,password'
        ]);

        if ($validator->fails())
        {
            Alert::error('😩 Error', 'incorrect info');
            return redirect('login');
        }

        $login_info = Register::where([
            ['user_email', $request->email],
            ['password', $request->password]
        ]
        )->first();
        if ($login_info->designation_id == 1)
        {
            return redirect('admin');
        }

        elseif($login_info->designation_id == 2) 
        {
            return redirect('teacher');
        }

        elseif($login_info->designation_id == 3) 
        {
            return redirect('student');
        }

        else
        {
            Alert::error('😩 Error', 'incorrect info');
            return redirect('login');
        }
    }
}