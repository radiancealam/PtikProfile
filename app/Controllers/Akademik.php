<?php

namespace App\Controllers;

class Akademik extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Akademik',
            'active' => 'akademik',
        ];
        return view('akademik/index', $data);
    }
}
