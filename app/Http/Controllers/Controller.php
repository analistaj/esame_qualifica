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
	function ()
	{
		return view('chisiamo');
	
	function menu()
	{
		return view('trainers');
	}
	function prenotazioni()
	{
		return view('corsi');
	}
	function blog()
	{
		return view('blog');

		function dovesiamo()
		{
			return view('tariffe');
		}
	}