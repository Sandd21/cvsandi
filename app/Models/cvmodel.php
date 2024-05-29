<?php
namespace App\Models;
use CodeIgniter\Model;
class cvmodel extends Model
{
    public function about()
    {
        return $this->db->table("about")
        ->get()
        ->getResultArray();
    }
}