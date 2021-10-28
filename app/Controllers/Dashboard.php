<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = ['content' => 'dashboard'];
        return view('master', $data);
    }    
}
