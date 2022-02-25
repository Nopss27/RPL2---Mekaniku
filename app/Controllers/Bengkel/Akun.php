<?php

namespace App\Controllers\Bengkel;

use App\Controllers\BaseController;
use App\Models\m_bengkel;

class Akun extends BaseController
{
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('/bengkel/akun');
    }
}
