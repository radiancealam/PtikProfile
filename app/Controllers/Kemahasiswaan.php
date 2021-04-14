<?php

namespace App\Controllers;

class Kemahasiswaan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Kemahasiswaan',
            'active' => 'kemahasiswaan',
        ];
        return view('kemahasiswaan/index', $data);
    }
}
