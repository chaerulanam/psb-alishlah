<?php

namespace App\Controllers;

use App\Models\PesanModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->pesanModel = new PesanModel();
    }
    public function index()
    {
        $nama_lengkap = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $judul = $this->request->getPost('subject');
        $pesan = $this->request->getPost('message');

        $data = [
            'isi' => 'index',
        ];
        if ($nama_lengkap != null) {
            $data = [
                'nama_lengkap' => $nama_lengkap,
                'email' => $email,
                'judul' => $judul,
                'pesan' => $pesan,
            ];

            if (!$this->validate(
                [
                    'reCaptcha2' => [
                        'rules' => 'required|reCaptcha2[]',
                        'errors' => [
                            'required' => 'Nama Lengkap Harus Diisi !'
                        ]
                    ],
                ]
            )) {
                $validation = service('validation')->getErrors();
                echo $validation;
            } else {
                if (!$this->pesanModel->save($data)) {
                    echo 'Gagal Mengirim Pesan';
                } else {
                    echo 'OK';
                }
            }
        } else {
            return view('Layout/template', $data);
        }
    }
}