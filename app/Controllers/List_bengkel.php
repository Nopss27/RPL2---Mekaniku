<?php

namespace App\Controllers;

use App\Models\m_bengkel;

class List_bengkel extends BaseController
{
    public function __construct()
    {
        $this->m_bengkel = new m_bengkel();
    }

    public function index()
    {
        $bengkel = $this->m_bengkel->findAll();

        $lat = $this->request->getVar('lat');
        $long = $this->request->getVar('long');

        $data = [
            'bengkel' => $bengkel,
            'lat' => $lat,
            'long' => $long,
        ];

        return view('list_bengkel', $data);
    }
}
