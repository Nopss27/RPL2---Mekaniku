<?php

namespace App\Controllers\Bengkel;

use App\Controllers\BaseController;
use App\Models\m_bengkel;

class Daftar extends BaseController
{
    public function __construct()
    {
        $this->m_bengkel = new m_bengkel();
    }

    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('bengkel/daftar', $data);
    }

    public function buat_akun()
    {
        if (isset($_POST['daftar'])) {
            if (!$this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'nama tidak boleh kosong',
                    ]
                ],
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Pengguna tidak boleh kosong',
                    ]
                ],
                'no_telp' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'nomor telepon tidak boleh kosong',
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kata Sandi tidak boleh kosong',
                    ],
                ],
            ])) {
                session()->setFlashdata('pesan', 'Pendaftaran gagal, silahkan ulangi kembali');
                $validation = session()->setFlashdata('gagal', \Config\Services::validation()->listErrors());
                return redirect()->to('/bengkel/daftar')->withInput()->with('validation', $validation);
            }
        }

        $nama = $this->request->getPost('nama');
        $no_telp = $this->request->getPost('no_telp');
        $whatsapp = $this->request->getPost('whatsapp');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = [
            'nama_pemilik' => $nama,
            'no_telp' => $no_telp,
            'whatsapp' => $whatsapp,
            'username' => $username,
            'password' => $password
        ];

        $success = $this->m_bengkel->insert($data);

        if ($success) {
            session()->setFlashdata('pesan', 'pendaftaran berhasil, Silahkan Login');
            return redirect()->to('/bengkel/login');
        }
    }
}
