<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ['content' => 'issue'];
        return view('master', $data);
    }
}
