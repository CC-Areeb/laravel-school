<?php

namespace App\Http\Controllers;

use App\Models\Registeration;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function list()
    {
        $information = Registeration::all();
        return view('admin_view.admin', ['users'  => $information]);
    }
}
