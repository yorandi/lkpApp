<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use CodeIgniter\Controller;

class PesertaController extends Controller
{
    public function index()
    {
        $model = new PesertaModel();
        $data['peserta'] = $model->orderBy('id', 'DESC')->findAll();
        return view('peserta/index', $data);
    }

    public function create()
    {
        return view('peserta/create');
    }

    public function store()
    {
        $model = new PesertaModel();
        $data = $this->request->getPost();

        $model->save($data);

        return redirect()->to('/peserta')->with('success', 'Data berhasil disimpan');
    }
}
