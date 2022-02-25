<?php

namespace App\Controllers\bengkel;

use App\Controllers\BaseController;
use App\Models\m_montir;

class Montir extends BaseController
{
    public function __construct()
    {
        $this->m_montir = new m_montir();
    }

    public function index()
    {
        $montir = $this->m_montir->findAll();
        $data = [
            'montir' => $montir
        ];

        return view('/bengkel/montir', $data);
    }

    public function tambah_montir()
    {
        return view('/bengkel/tambah_montir');
    }

    public function tambah()
    {
        $id_bengkel = $this->request->getPost('id_bengkel');
        $nama = $this->request->getPost('nama');
        $no_telp = $this->request->getPost('no_telp');
        $whatsapp = $this->request->getPost('whatsapp');
        $jk = $this->request->getPost('jk');
        $email = $this->request->getPost('email');

        $data = [
            'id_bengkel' => $id_bengkel,
            'nama' => $nama,
            'no_telp' => $no_telp,
            'whatsapp' => $whatsapp,
            'jenis_kelamin' => $jk,
            'email' => $email,
        ];

        $success = $this->m_montir->insert($data);

        if ($success) {
            session()->setFlashdata('pesan', 'montir berhasil ditambahkan');
            return redirect()->to('/bengkel/montir');
        }
    }
}
