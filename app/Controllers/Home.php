<?php

namespace App\Controllers;

class Home extends BaseController

//memanggil tampilan dashboard
{
    public function index()

    {
        $data = [
            'judul' => 'Rute Map', 
            'isi' => 'v_rute',
        ];
        return view('v_template', $data);
    }
    
    
}


?>
