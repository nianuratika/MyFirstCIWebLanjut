<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
public function show() {
	$data['nama'] = 'Nia Nur Atika';
	$data['npm'] = '1817051015';
	echo view('Mahasiswa/header');
	echo view('Mahasiswa/index', $data);
	echo view('Mahasiswa/footer');
}
	//--------------------------------------------------------------------

}
