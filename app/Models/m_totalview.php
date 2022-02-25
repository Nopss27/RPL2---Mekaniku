<?php

namespace App\Models;

use CodeIgniter\Model;

class m_totalview extends Model
{
    protected $table = 'totalview';
    protected $primarykey = 'id';
    protected $allowedFields = ['id', 'page', 'totalvisit'];

    public function total_visit(){
        return $this->db->table('totalview')->select('totalview')->get()->getFirstRow();
    }

    public function update_view($data, $page)
    {        
        return $this->db->table('totalview')->update($data, ['page' => $page]);
    }
}
