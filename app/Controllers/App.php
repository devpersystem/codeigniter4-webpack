<?php

namespace App\Controllers;

class App extends BaseController
{
	public function index()
	{
		$data['title'] = 'Getting Started';

		return view('app_index', $data);
	}
}
