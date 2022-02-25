<?php

namespace App\Models;

use CodeIgniter\Model;

class m_customer extends Model
{
    protected $table = 'customer';
    protected $primarykey = 'id_customer';
    protected $allowedFields = ['id_customer', 'nama', 'no_telp', 'tgl_lahir', 'jenis_kelamin', 'email', 'username', 'password'];
}
