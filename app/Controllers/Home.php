<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Hello World',
            'page_subtitle' => 'Selamat Datang',
            'lists' => $this->navigation()
        ];
        return view('welcome_message', $data);
    }

    public function navigation() {
        $lists = ['Menu 1', 'Menu 2', 'Menu 3', 'Menu 4'];
        return $lists; 
    }

    
}
