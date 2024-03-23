<?php

namespace App\Controllers;

class Pengguna extends BaseController
{
    public function index(): string
    {
        return view('pengguna/penggunaview');
    }
}
