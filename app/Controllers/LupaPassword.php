<?php

namespace App\Controllers;

class LupaPassword extends BaseController
{
    public function index()
    {
        $data = ['content' => 'LupaPassword'];
        return view('LupaPassword', $data);
    }
}
