<?php

namespace App\Controllers;

class akun extends BaseController
{
    public function index()
    {
        $data = ['content' => 'akun'];
        return view('master', $data);
    }
}
