<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

	public function login(){
        return view('login.login');
		
	}

    public function logine(){
        return view('login.logine');

		
	}

    public function create(Request $request){
    	
    }
}