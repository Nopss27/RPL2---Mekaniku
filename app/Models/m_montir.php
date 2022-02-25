<?php

namespace App\Models;

use CodeIgniter\Model;

class m_montir extends Model
{
    protected $table = 'montir';
    protected $primarykey = 'id_montir';
    protected $allowedFields = ['id_montir', 'id_bengkel', 'nama', 'no_telp', 'whatsapp', 'jenis_kelamin', 'email'];

    public function get_montir($id)
    {
        return $this->db->table('montir')->where('id_bengkel', $id)->get()->getResultArray();
    }
}
