<?php

namespace App\Controllers;

use App\Models\m_bengkel;
use App\Models\m_montir;

class detail_bengkel extends BaseController
{
    public function __construct()
    {
        $this->m_bengkel = new m_bengkel();
        $this->m_montir = new m_montir();
    }

    public function index($id)
    {
        $detail = $this->m_bengkel->detail_bengkel($id);
        $montir = $this->m_montir->get_montir($id);

        $data = [
            'title' => 'Detail Bengkel',
            'detail' => $detail,
            'montir' => $montir,
        ];

        return view('detail_bengkel', $data);
    }
}
