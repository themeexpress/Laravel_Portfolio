<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
  

//show login form
	public function index(){
		return view('admin.login');
	}


}
