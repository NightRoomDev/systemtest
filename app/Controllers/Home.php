<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'Главная';
		echo view('pages/index', $data);
	}

	public function sigin()
	{
		$data['title'] = 'Вход';
		echo view('pages/sigin', $data);
	}

	//--------------------------------------------------------------------

}
