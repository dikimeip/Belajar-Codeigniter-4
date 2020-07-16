<?php 

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function about($nama="",$umur=0)
	{
		echo "Hello About $nama umur saya $umur";
	}

	public function profil()
	{
		echo "Nama Saya $this->nama";
	}

	//--------------------------------------------------------------------

}
