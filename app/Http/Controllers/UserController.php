<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('login')->with('error',' Maaf anda tidak memiliki akses');
     }
     
}
