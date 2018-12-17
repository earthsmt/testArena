<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class attractions extends Controller
{
	public function display()
	{
		return view('homepage');
	}
}
