<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['email', 'name', 'password'];


    public function registrasi($data)
    {
        // $a = $this->db->table('users');
        // $sql = $a->insert($data);

        // if ($sql) {
        //     $response = [
        //         'pesan' => 'berhasil'
        //     ];
        //     # code...
        // } else {
        //     $response = [
        //         'pesan' => 'gagal'
        //     ];
        // }
        // echo json_encode($response);
    }
}
