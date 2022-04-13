<?php

namespace App\Controllers;

use App\Models\PessoasModel;

class Home extends BaseController
{
    
    public function index()
    {
        echo view('template/header');
        echo view('home');
        echo view('template/footer');
    }

    public function page($page='home'){
        echo view('template/header');
        echo view($page);
        echo view('template/footer');
    }

    public function pessoas(){
        $model = new PessoasModel();

        $data = [
            'title'=>'Pessoas',
            'pessoas'=>$model->getPessoas()
        ];

        echo view('template/header');
        echo view('pessoa',$data);
        echo view('template/footer');
    }
}
