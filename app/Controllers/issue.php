<?php

namespace App\Controllers;

class issue extends BaseController
{
    public function index()
    {
        $data = ['content' => 'issue'];
        return view('master', $data);
    }
}
