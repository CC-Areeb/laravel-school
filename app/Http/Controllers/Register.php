<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registeration;
use Illuminate\Support\Facades\Validator;
use Alert;
use Illuminate\Validation\Rules\Exists;
// use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function Display()
    {
        return view('/register');
    }

    protected function SignUp(Request $request) // built in validator function/method
    {
        $validated =  Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'user_email'=>'required|unique:registeration|email',
            'user_password'=>'required|same:confirm_user_password',
            'user_address'=>'required',
            'designation'=>'required|in:admin,teacher,student'
        ]);

        if (!empty($request->input('first_name') && $request->input('last_name') && $request->input('user_email') && $request->input('user_email') && $request->input('user_address')))
        {
            if ($request->input('user_password') === $request->input('confirm_user_password'))
            {
                if ($request->input('designation') == 'admin' || $request->input('designation') == 'teacher')
                {
                    $new_user = new Registeration();

                    $new_user->first_name = request('first_name');
                    $new_user->last_name = request('last_name');
                    $new_user->user_email = request('user_email');
                    $new_user->user_password = bcrypt(request('user_password'));
                    $new_user->user_address = request('user_address');
                    $new_user->designation = request('designation');
                    $new_user->save();
                    
                    Alert::success('Success', 'Information has been saved');
                    return redirect('/register');                    
                }

                else
                {
                    Alert::error('Oops', 'Something went wrong (._.)');
                    return redirect('/register');
                }
            }     
        }   

        else
        {
            Alert::error('Oops', 'please fill in the fields (._.)');
            return redirect('/register');
        }
    }
}