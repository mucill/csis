<?php

namespace App\Controllers;

class login extends BaseController
{
    public function index()
    {
        $data = ['content' => 'login'];
        return view('login', $data);
    }
}
