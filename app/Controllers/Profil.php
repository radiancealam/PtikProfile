<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profil',
            'active' => 'profil',
        ];
        return view('profil/index', $data);
    }
}
