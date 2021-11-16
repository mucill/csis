<?php

namespace App\Controllers;

class BuatAkun extends BaseController
{
    public function index()
    {
        $data = ['content' => 'BuatAkun'];
        return view('BuatAkun', $data);
    }
}
