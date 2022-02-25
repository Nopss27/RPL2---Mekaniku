<?php

namespace App\Controllers\bengkel;

use App\Controllers\BaseController;
use App\Models\m_bengkel;

class Form_edit extends BaseController
{
    public function __construct()
    {
        $this->m_bengkel = new m_bengkel();
    }

    public function index()
    {
        $id_bengkel = $this->request->getPost('edit');

        $bengkel = $this->m_bengkel->where('id_bengkel', $id_bengkel)->first();

        $data = [
            'bengkel' => $bengkel
        ];

        return view('/bengkel/edit_bengkel', $data);
    }

    public function edit_bengkel()
    {
        $file = $this->request->getFile('gambar');

        if ($file->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            $namaGambar = $file->getName();

            $file->move('img', $namaGambar);

            unlink('img/' . $this->request->getVar('gambarLama'));
        }

        $id_bengkel = $this->request->getPost('id_bengkel');
        $nama_bengkel = $this->request->getPost('nama_bengkel');
        $buka = $this->request->getPost('jam_buka');
        $tutup = $this->request->getPost('jam_tutup');
        $alamat = $this->request->getPost('alamat');
        $lat = $this->request->getPost('lat');
        $long = $this->request->getPost('long');
        $link = $this->request->getPost('link');
        $nama_pemilik = $this->request->getPost('nama_pemilik');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $no_telp = $this->request->getPost('no_telp');
        $whatsapp = $this->request->getPost('whatsapp');

        $data = [
            'nama_bengkel' => $nama_bengkel,
            'jam_buka' => $buka,
            'jam_tutup' => $tutup,
            'gambar' => $namaGambar,
            'alamat' => $alamat,
            'latitude' => $lat,
            'longitude' => $long,
            'link' => $link,
            'nama_pemilik' => $nama_pemilik,
            'username' => $username,
            'password' => $password,
            'no_telp' => $no_telp,
            'whatsapp' => $whatsapp
        ];

        $success = $this->m_bengkel->edit($data, $id_bengkel);

        if ($success) {
            session()->setFlashdata('pesan', 'bengkel berhasil diupdate!');
            return redirect()->to('/bengkel');
        }
    }
}
