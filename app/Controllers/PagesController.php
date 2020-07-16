<?php namespace App\Controllers;
use App\Models\KomikModels;

class PagesController extends BaseController
{

	protected $MyKomik;
	public function __construct()
	{
		$this->MyKomik = new KomikModels();
	}

	public function index()
	{
		$data = [
			'judul' => 'Home'
		];
		return view('pages/home',$data);
	}

	public function about()
	{
		$data = [
			'judul' => 'About'
		];
		return view('pages/about',$data);
	}

	public function kontak()
	{
		$data = [
			'judul' => 'kontak',
			'alamat' => [
				[
					'nama' => 'Diki Mei P',
					'alamat' => 'Dawarblandong'
				],
				[
					'nama' => 'Diki',
					'alamat' => 'Lamongan'
				]
			],
		];
		return view('pages/kontak',$data) ;
	} 

	public function komik()
	{
		$data = [
			'nomer' => 1,
			'judul' => 'Komik Page',
			'komik' => $this->MyKomik->getKomik()
		];
		return view('pages/komik',$data);
	}

	public function detail($komik)
	{
		$data = [
			'judul' => 'Komik',
			'komik' => $this->MyKomik->getKomik($komik),
		];
		
		return view('pages/Detail',$data);
	}

	public function addKomik()
	{

		$data = [
			'judul' => 'Add Komik',
			'validation' => \Config\Services::validation()
		];
		return view('pages/addKomik',$data) ;
	}

	public function save()
	{

		if (!$this->validate([
			'judul' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi Ya..!'
				]
			],
			'penulis' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi Ya..!'
				]
			],
			'penerbit' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi Ya..!'
				]
			],
			'sampul' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi Ya..!'
				]
			],
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/PagesController/addKomik')->withInput()->with('validation',$validation);
		}

		$slug = url_title($this->request->getVar('judul'),'-',true);
		$this->MyKomik->save([
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'penulis' => $this->request->getVar('penulis'),
			'penerbit' => $this->request->getVar('penerbit'),
			'sampul' => $this->request->getVar('sampul')

		]);
		session()->setFlashdata('pesan','Success Input Data');
		return redirect()->to('/PagesController/komik') ;
	}

	public function deleteKomik($id)
	{
		$this->MyKomik->delete($id);
		session()->setFlashdata('pesan','Success Hapus Data');
		return redirect()->to('/PagesController/komik') ;
	}

	public function edit($id)
	{
		$data = [
			'judul' => 'Ubah Komik',
			'validation' => \Config\Services::validation(),
			'komik' => $this->MyKomik->getKomik($id)
		];

		return view('pages/editKomik',$data);
	}

	public function update($id)
	{
		if (!$this->validate([
			'judul' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi Ya..!'
				]
			],
			'penulis' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi Ya..!'
				]
			],
			'penerbit' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi Ya..!'
				]
			],
			'sampul' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi Ya..!'
				]
			],
		])) {
			$validation = \Config\Services::validation();
			return redirect()->to('/PagesController/addKomik')->withInput()->with('validation',$validation);
		}

		$slug = url_title($this->request->getVar('judul'),'-',true);
		$this->MyKomik->save([
			'id' => $id,
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'penulis' => $this->request->getVar('penulis'),
			'penerbit' => $this->request->getVar('penerbit'),
			'sampul' => $this->request->getVar('sampul')

		]);
		session()->setFlashdata('pesan','Success Input Data');
		return redirect()->to('/PagesController/komik') ;
	}
	//--------------------------------------------------------------------

}
