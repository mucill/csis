<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = ['content' => 'home'];
        return view('master', $data);
    }    
}
