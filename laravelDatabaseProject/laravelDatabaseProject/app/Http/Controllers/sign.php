<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attraction_users;

class sign extends Controller
{
	public function signingIn()
	{
		$attractionUser = new attraction_users;
		$attractionUser->signingIn();
	}
	
	public function options()
	{
		return view("homepage");
	} 
}
