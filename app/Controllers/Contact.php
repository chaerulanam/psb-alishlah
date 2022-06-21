<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'isi' => 'contact'
        ];
        return view('Layout/template', $data);
    }
}
