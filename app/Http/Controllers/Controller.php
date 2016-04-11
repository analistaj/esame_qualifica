<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
}

{
	function menu()
	{
		return view('index-1');
	}
	function prenotazioni()
	{
		return view('index-2');
	}
	function blog()
	{
		return view('index-3');

		function dovesiamo()
		{
			return view('index-4');
		}
	}