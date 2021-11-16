<?php

namespace App\Controllers;

class UbahPassword extends BaseController
{
    public function index()
    {
        $data = ['content' => 'UbahPassword'];
        return view('UbahPassword', $data);
    }
}
