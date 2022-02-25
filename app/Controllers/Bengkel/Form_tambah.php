<?php

namespace App\Controllers\bengkel;

use App\Controllers\BaseController;
use App\Models\m_bengkel;
use App\Models\m_pemilik;

class Form_tambah extends BaseController
{
    public function __construct()
    {
        $this->m_bengkel = new m_bengkel();
    }

    public function index()
    {
        return view('/bengkel/tambah_bengkel');
    }

    public function tambah_bengkel()
    {
        $file = $this->request->getFile('gambar');
        $file->move('img');

        $id_bengkel = $this->request->getPost('id_bengkel');
        $nama_bengkel = $this->request->getPost('nama_bengkel');
        $buka = $this->request->getPost('jam_buka');
        $tutup = $this->request->getPost('jam_tutup');
        $gambar = $file->getName();
        $alamat = $this->request->getPost('alamat');
        $lat = $this->request->getPost('lat');
        $long = $this->request->getPost('long');
        $link = $this->request->getPost('link');
        $nama_pemilik = $this->request->getPost('nama_pemilik');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');


        $data = [
            'id_bengkel' => $id_bengkel,
            'nama_bengkel' => $nama_bengkel,
            'jam_buka' => $buka,
            'jam_tutup' => $tutup,
            'gambar' => $gambar,
            'alamat' => $alamat,
            'latitude' => $lat,
            'longitude' => $long,
            'link' => $link,
            'nama_pemilik' => $nama_pemilik,
            'username' => $username,
            'password' => $password,
        ];

        $success = $this->m_bengkel->edit($data, $id_bengkel);

        if ($success) {
            session()->setFlashdata('pesan', 'bengkel berhasil ditambahkan!');
            return redirect()->to('/bengkel');
        }
    }
}
