<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Locations;

class DashboardController extends Controller
{
	public function make() 
	{

		$locations = Locations::all();

		foreach($locations as $location) 
		{

			echo $location;

		}die;	

		return view('dashboard');
	}
}
