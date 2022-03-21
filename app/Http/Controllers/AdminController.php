<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
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

    protected function updateUserBtn($id)
    {
        $data = Register::find($id);
        return view('/update', ['data' => $data]);
    }

    protected function updateInfo(Request $request)
    {
        $update = Register::find($request->id);
        $update->first_name = $request->first_name;
        $update->last_name = $request->last_name;
        $update->user_email = $request->user_email;
        $update->address = $request->address;
        $update->save();

        Alert::success('Updation successful', 'your changes have been saved');
        return redirect('admin');
    }

    protected function deleteUser($id)
    {
        $delete = Register::find($id);
        $delete->delete();

        Alert::warning('Deletion', 'user info has been deleted');
        return redirect('admin');

    }
}
