<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    protected function registerForm()
    {
        $data = Designation::all();
        return view('register', ['designation' => $data]);
    }


    protected function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_email' => 'required|unique:registers',
            'password' => 'required|min:7|confirmed',
            'address' => 'required',
            'designation_id' => 'required|in:1,2'
        ]);

        if ($validator->fails())
        {
            Alert::error('Error', 'cannot save info');
            return redirect('registration');
        }

        else
        {
            $users = Register::create([
                'first_name' => request('first_name'),
                'last_name' => request('last_name'),
                'user_email' => request('user_email'),
                'password' => request('password'),
                'address' => request('address'),
                'designation_id' => request('designation_id')
            ]);
            Alert::success('Okay', 'Info has been saved');
            return redirect('login');
        }
    }
}



/*
This is another way of inserting data into database
by making a object ($variable_name = new Model_name;) and then
requesting the inputs from user (learned from laravel docs)

$users = new Register; ----------> object

$users->first_name = $request->first_name; ----> asking user to enter data into form fields (first_name is name attribute)
$users->last_name = $request->last_name;
$users->user_email = $request->user_email;
$users->password = $request->password;
$users->address = $request->address;
$users->select_post = $request->select_post;

$users->save(); ------> a built in method to save data 
Alert::success('Okay', 'Info has been saved'); -----> sweet alerts by real rashid (use the docs) 
return redirect('login'); -----> redirecting the user to this page after the validation has passed 

*/