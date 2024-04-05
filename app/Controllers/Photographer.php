<?php

namespace App\Controllers;

use App\Models\Modelphotographer;
class Photographer extends BaseController
{
    public function index()
    {
        return view('photographer/viewtampildata');
    }

    public function ambildata(){
        if($this->request->isAJAX()){
            $pht = new Modelphotographer;
            $data = [
                'tampildata' => $pht->findAll()
            ];
            $msg =[
                'data' => view('photographer/galeriphotographer', $data)
            ];
            echo json_encode($msg);
        }else{
            exit('Maaf Tidak Dapat Diproses');
        }
    }
}