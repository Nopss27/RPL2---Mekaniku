<?php

namespace App\Controllers;

use App\Models\m_customer;

class Login extends BaseController
{
    public function __construct()
    {
        $this->m_customer = new m_customer();
    }

    public function index()
    {
        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];

        return view('login', $data);
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
                return redirect()->to('/login')->withInput()->with('validation', $validation);
            }
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $customer = $this->m_customer->where('username', $username)->first();

        if (empty($customer)) {
            session()->setFlashdata('pesan', 'username salah, silakan periksa kembali username anda!');
            return redirect()->to('/login')->withInput();
        }
        if ($customer['password'] != $password) {
            session()->setFlashdata('pesan', 'password salah, silakan periksa kembali password anda!');
            return redirect()->to('/login')->withInput();
        }

        $sesi = [
            'id_customer' => $customer['id_customer'],
            'nama_customer' => $customer['nama'],
            'tglLahir_customer' => $customer['tgl_lahir'],
            'jk_customer' => $customer['jenis_kelamin'],
            'no_telp_customer' => $customer['no_telp'],
            'email_customer' => $customer['email'],
            'username_customer' => $customer['username'],
            'password_customer' => $customer['password'],
        ];

        session()->set($sesi);
        session()->setFlashdata('success', 'selamat datang');
        return redirect()->to('/list_bengkel');
    }


    public function logout()
    {
        $data = [
            'id_customer',
            'nama_customer',
            'tglLahir_customer',
            'jk_customer',
            'no_telp_customer',
            'email_customer',
            'username_customer',
            'password_customer',
        ];
        session()->remove($data);
        return redirect()->to('/');
    }
}
