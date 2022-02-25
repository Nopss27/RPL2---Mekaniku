<?php

namespace App\Models;

use CodeIgniter\Model;

class m_bengkel extends Model
{
    protected $table = 'bengkel';
    protected $primarykey = 'id_bengkel';
    protected $allowedFields = [
        'id_bengkel', 'nama_bengkel', 'jam_buka', 'jam_tutup', 'gambar', 'alamat',
        'latitude', 'longitude', 'link', 'nama_pemilik', 'no_telp', 'whatsapp', 'username', 'password'
    ];

    public function list_bengkel()
    {
        return $this->db->table('bengkel')->join('lokasi', 'lokasi.id_lokasi=bengkel.id_bengkel')->get()->getResultArray();
    }

    public function detail_bengkel($id)
    {
        return $this->db->table('bengkel')->where(['id_bengkel' => $id])->get()->getRowArray();
    }

    public function edit($data, $id)
    {
        return $this->db->table('bengkel')->update($data, ['id_bengkel' => $id]);
    }
}
