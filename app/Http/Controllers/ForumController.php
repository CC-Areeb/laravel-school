<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;

class ForumController extends Controller
{
    public function check()
    {
        return view('forum');
    }

    protected function mail(Request $req)
    {
        $validated =  Validator::make($req->all(), [
            'user_name_forum' => 'required',
            'user_email_forum' => 'required|email',
            'comment_section' => 'required|max:255'
        ]);

        if (!empty($req->input('user_name_forum')) && !empty($req->input('user_email_forum')) && !empty($req->input('comment_section'))) {
            Alert::success('Success', 'Information has been saved');
            return redirect('/forum'); 
        }

        else
        {
            Alert::error('Oops', 'Something went wrong (._.)');
            return redirect('/forum');
        }
    }
}
