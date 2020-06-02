<?php namespace App\Controllers;

class Form extends BaseController
{
	public function index()
	{
		echo view('template/header/header');
		echo view('template/content/form');
		echo view('template/footer/footer');
	}

	//--------------------------------------------------------------------

}
