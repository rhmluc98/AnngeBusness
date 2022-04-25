<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {
        $data = products::all();
        return view('home', compact('data'));
    } 
    
    public function redirects()
    {
        $data = products::all();
        $usertype = Auth::user()->usertype;

        if($usertype == 1)
        {
            
            return view('admin.adminHome');
        }

        else
        {
            return view('home',compact('data'));
        }
    }
}
