<?php namespace App\Controllers;

class Home extends BaseController{

	public function index(){
		$data['title'] = "The Band";

		echo view('templates/header', $data);
		echo view('index', $data);
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
