<?php

namespace App\Controllers;

class setting extends BaseController
{
    public function index()
    {
        $data = ['content' => 'setting'];
        return view('master', $data);
    }
}
