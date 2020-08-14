<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');  //if login, show ui to user
    }
	 public function dashboard($value=''){
    	return view('backend.dashboard');
    }
}
