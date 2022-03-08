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

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function process(Request $requesting)
    {
        $user  =  Registeration::where("user_email", $requesting->login_email)
                                ->where('user_password',$requesting->login_password)
                                ->where('designation', $requesting->designation)
                                ->first();
                                
        if($user){
            if ($requesting->input('designation') == 'admin')
            {
                $info = $requesting->input('login_email');
                $requesting->session()->put('login_email', $info);
                return view('admin_view.admin');
            }

            elseif ($requesting->input('designation') == 'teacher')
            {
                $info = $requesting->input('login_email');
                $requesting->session()->put('login_email', $info);
                return view('teacher_view.teacher');    
            }
    
            else
            {
                Alert::error('Oops', 'Something was wrong (._.)');
                return redirect('/login');
            }
        }

        else
        {
            Alert::error('Oops', 'Please try again (._.)');
            return redirect('/login');
        }
    }

}


/*

$requesting->session()->put('info', $requesting->input());

if ($requesting->input('designation') == 'admin')
    {
        $info = $requesting->input('login_email');
        $requesting->session()->put('login_email', $info);
        return redirect('/admin');
    }

elseif($requesting->input('designation') == 'teacher')
    {
        $info = $requesting->input('login_email');
        $requesting->session()->put('login_email', $info);
        return redirect('/teacher');
    }



if (!empty($requesting->input('login_email') && !empty($requesting->input('login_password'))))
        {
            if ($requesting->input('login_email') == 'user_email' && $requesting->input('login_password') == 'user_password')
            {
            
                if ($requesting->input('designation') == 'admin')
                {
                    $info = $requesting->input('login_email');
                    $requesting->session()->put('login_email', $info);
                    return redirect('/admin');
                }

        
            elseif($requesting->input('designation') == 'teacher')
                {
                    $info = $requesting->input('login_email');
                    $requesting->session()->put('login_email', $info);
                    return redirect('/teacher');
                }

                else
                {
                    Alert::error('Oops', 'please choose the correct designation (._.)');
                    return redirect('/login');   
                }
            }
            
            else
            {
                Alert::error('Oops', 'please choose the correct designation (._.)');
                return redirect('/login');
            }
            
        }

        else
        {
            Alert::error('Oops', 'please fill in the fields (._.)');
            return redirect('/login');            
        }








*/