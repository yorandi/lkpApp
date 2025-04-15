<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    protected $modelUser;

    public function __construct()
    {
        $this->modelUser = new UserModel();
    }


    public function index(): string
    {
        return view('login');
    }

    public function forgotPassword()
    {
        return view('forgot-password');
    }

    public function register()
    {
        return view('register');
    }

    public function proses()
    {
        if ($this->request->getPost('act') == 'registrasi') {
            $pass = $this->request->getPost('password');
            $data =
                [
                    'email' => $this->request->getPost('email'),
                    'nama' => $this->request->getPost('name'),
                    'password' => password_hash($pass, PASSWORD_DEFAULT),
                ];

            $this->modelUser->insert($data);
            $res = [
                'pesan' => 'berhasil',
            ];

            return json_encode($res);
        }
    }
}
