<?php

namespace App\Controllers;

class profil extends BaseController
{
    public function index()
    {
        $data = ['content' => 'profil'];
        return view('master', $data);
    }
}
