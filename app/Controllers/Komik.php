<?php namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{

	protected $komikModel;

	public function __construct()
	{
		$this->komikModel = new KomikModel();
	}

	public function index()
	{
		// $komik = $this->komikModel->findAll();

		$data = [
			'title' => 'DaftarKomik | WebProgrammingUnpas',
			'komik' => $this->komikModel->getKomik()
		];

		// $komikModel = new \App\Models\KomikModel();
		return view('komik/index', $data);
	}

	public function detail($slug)
	{
		$data = [
			'title' => 'DetailKomik | WebProgrammingUnpas',
			'komik' => $this->komikModel->getKomik($slug)
		];

		return view('komik/detail', $data);
	}

}
