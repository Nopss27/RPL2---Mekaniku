<?php

namespace App\Controllers;

use App\Models\m_pageview;
use App\Models\m_totalview;
use mysqli;

class Home extends BaseController
{
    public function __construct()
    {
        $this->m_pageview = new m_pageview();
        $this->m_totalview = new m_totalview();
    }

    public function index()
    {
        $ip = $this->request->getIPAddress();

        $cekIp = $this->m_pageview->cekIp($ip);

        $row = count($cekIp);

        $page = 'mekaniku';

        $dataPageView = [
            'page' => $page,
            'userip' => $ip
        ];

        if ($row >= 1) {
        } else {
            $this->m_pageview->insert($dataPageView);
        }

        $total = count($this->m_pageview->findAll());
        
        $data = [
            'total_view' => $total
        ];

        return view('landing_page', $data);
    }
}
