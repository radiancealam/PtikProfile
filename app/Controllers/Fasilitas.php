<?php

namespace App\Controllers;

class Fasilitas extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Fasilitas',
            'active' => 'fasilitas',
        ];
        return view('fasilitas/index', $data);
    }
}
