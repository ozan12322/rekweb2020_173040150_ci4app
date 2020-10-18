<?php namespace App\Controllers;

class Pages extends BaseController
{

	public function index()
	{
		$data = [
			'title' => 'Home | WebProgrammingUnpas',
			'test' => ['satu', 'dua', 'tiga']
		];

		echo view('layout/header', $data);
		echo view('pages/home');
		echo view('layout/footer');
	}

	public function about()
	{
		$data = [
			'title' => 'AboutMe | WebProgrammingUnpas'
		];

		echo view('layout/header', $data);
		echo view('pages/about');
		echo view('layout/footer');
	}

}
