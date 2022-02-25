<?php

namespace App\Controllers;

use App\Models\m_customer;

class Daftar extends BaseController
{
    public function __construct()
    {
        $this->m_customer = new m_customer();
    }

    public function index()
    {
        return view('daftar');
    }

    public function buat_akun()
    {
        $nama = $this->request->getPost('nama');
        $no_telp = $this->request->getPost('no_telp');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'nama' => $nama,
            'no_telp' => $no_telp,
            'username' => $username,
            'password' => $password
        ];

        $success = $this->m_customer->insert($data);
        if ($success) {
            session()->setFlashdata('pesan', 'pendaftaran berhasil, Silahkan Login');
            return redirect()->to('/login');
        }
    }
}
