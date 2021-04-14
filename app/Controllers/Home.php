<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Beranda',
			'active' => 'beranda',
		];
		return view('index', $data);
	}
}
