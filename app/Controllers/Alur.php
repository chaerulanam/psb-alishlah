<?php

namespace App\Controllers;

class Alur extends BaseController
{
    public function index()
    {
        $data = [
            'isi' => 'alur',
        ];
        return view('Layout/template', $data);
    }
}