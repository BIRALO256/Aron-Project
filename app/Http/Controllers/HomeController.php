<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function redirect(){
        
        $Usertype=Auth::User()->User_type;
        if ($Usertype=='1'){

            return view('admin.home');
        }
        else{
            return view('dashboard');
        }
    }
}
