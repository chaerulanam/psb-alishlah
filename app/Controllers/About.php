<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'isi' => 'about'
        ];
        return view('Layout/template', $data);
    }
}
