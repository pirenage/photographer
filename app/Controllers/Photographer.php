<?php

namespace App\Controllers;

use App\Models\Modelphotographer;
class Photographer extends BaseController
{
    public function index()
    {
        $pht = new Modelphotographer;
        $data = [
            'tampildata' => $pht->findAll()
        ];
        return view('photographer/viewtampildata', $data);
    }
}
