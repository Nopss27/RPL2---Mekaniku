<?php

namespace App\Models;

use CodeIgniter\Model;

class m_pageview extends Model
{
    protected $table = 'pageview';
    protected $primarykey = 'id';
    protected $allowedFields = ['id', 'page', 'userip'];

    public function cekIp($ip)
    {
        return $this->db->table('pageview')->where(['page' => 'mekaniku', 'userip' => $ip])->get()->getResultArray();
    }
}
