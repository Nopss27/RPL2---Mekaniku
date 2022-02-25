<?php

namespace App\Controllers\bengkel;

use App\Controllers\BaseController;
use App\Models\m_bengkel;

class Login extends BaseController
{
    public function __construct()
    {
        $this->m_bengkel = new m_bengkel();
    }

    public function index()
    {
        $data = [
            'title' => 'Login Bengkel',
            'validation' => \Config\Services::validation()
        ];

        return view('bengkel/login', $data);
    }

    public function auth()
    {
        if (isset($_POST['login'])) {
            if (!$this->validate([
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'username tidak boleh kosong',
                    ]
                ],
                'password' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'password tidak boleh kosong',
                    ]
                ],
            ])) {
                session()->setFlashdata('pesan', 'Gagal masuk, silahkan periksa kembali username/password anda!');
                $validation = session()->setFlashdata('gagal', \Config\Services::validation()->listErrors());
                return redirect()->to('/bengkel/login')->withInput()->with('validation', $validation);
            }
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->m_bengkel->where('username', $username)->first();

        if (empty($user)) {
            session()->setFlashdata('pesan', 'username salah, silakan periksa kembali username anda!');
            return redirect()->to('/bengkel/login')->withInput();
        }
        if ($user['password'] != $password) {
            session()->setFlashdata('pesan', 'password salah, silakan periksa kembali password anda!');
            return redirect()->to('/bengkel/login')->withInput();
        }

        $sesi = [
            'id_bengkel' => $user['id_bengkel'],
            'nama_pemilik' => $user['nama_pemilik'],
            'no_telp' => $user['no_telp'],
            'whatsapp' => $user['whatsapp'],
            'username' => $user['username'],
            'password' => $user['password']
        ];

        session()->set($sesi);
        session()->setFlashdata('success', 'selamat datang');
        return redirect()->to('/bengkel');
    }

    public function logout()
    {
        $sesi = [
            'id_bengkel',
            'nama_pemilik',
            'username',
            'whatsapp',
            'password',
            'no_telp',
        ];

        session()->remove($sesi);
        return redirect()->to('/bengkel/login');
    }
}
