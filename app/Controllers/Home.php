<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->UserModel = new UserModel();;
    }
    
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'isi' => $this->UserModel->findAll(),
        ];
        return view('home', $data);
    }
}