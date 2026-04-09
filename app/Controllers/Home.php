<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'nama' => 'ryan',
            'role' => 'Belajar CodeIgniter 4'
        ];
        return view('home', $data);
    }
}
