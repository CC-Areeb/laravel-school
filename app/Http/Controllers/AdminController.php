<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Reflector;

class AdminController extends Controller
{
    protected function seeAll()
    {
        $info = Register::all();
        return view('admin', ['users' => $info]);
    }
}
