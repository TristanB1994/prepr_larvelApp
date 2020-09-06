<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locations;

class DashboardController extends Controller
{
	public function make() 
	{

		$locations = Locations::all();	

		return view('dashboard', [
			'locations' => $locations
		]);
	}
}
