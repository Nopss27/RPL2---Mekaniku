<?php

namespace App\Controllers\bengkel;

use App\Controllers\BaseController;
use App\Models\m_bengkel;

class My extends BaseController
{
    public function __construct()
    {
        $this->m_bengkel = new m_bengkel();
    }

    public function index()
    {
        $bengkel = $this->m_bengkel->findAll();
        
        $data = [
            'bengkel' => $bengkel
        ];
        return view('bengkel/my', $data);
    }

    public function form_tambah()
    {
        return view('/bengkel/tambah_bengkel');
    }
}
