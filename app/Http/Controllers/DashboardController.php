<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locations;

class DashboardController extends Controller
{
	public function make() 
	{


		$map= $_ENV['GOOGLE_MAPS_API_KEY'];
		
		return view('dashboard', [
			'map' => $map
		]);
	}
}
