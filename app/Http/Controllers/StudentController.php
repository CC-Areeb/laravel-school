<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Contracts\Validation\Validator;

class StudentController extends Controller
{
    public function seeData(Request $request)
    {
        $myInfo = Register::where('email', request('user_email'));  
        return view('student', ['myDetails' => $myInfo ]);
    }
} 