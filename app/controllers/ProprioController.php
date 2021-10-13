<?php

namespace app\controllers;

use app\database\models\Empresa;

class ProprioController extends Controller
{
    public function listaproprio($request, $response)
    {
        $Empresa = new Empresa();
        $proprio = $Empresa->find();

        //Retorna a view
        return $this->getTwig()->render(
            $response,
            $this->setView("admin/listaproprio"),
            [
                "titulo" => "Brand Provedor",
                "logo" => "/img/icon.png",
                "usericon" => "/img/usericon.png",
                "nome" => "Username",
                "proprio" => $proprio,
                "home" => "http://localhost",
                "cadastro" => "http://localhost/proprio",
                "base_url" => BASE_URL,
                "descricao_label" => "Controle e cadastro de empresa"
            ]
        );
    }

    public function proprio($request, $response)
    {
        $proprio = []; 

        //Retorna a view de cadastro
        return $this->getTwig()->render(
            $response,
            $this->setView("admin/proprio"),
            [
                "titulo" => "Brand Provedor",
                "logo" => "/img/icon.png",
                "usericon" => "/img/usericon.png",
                "nome" => "Username",
                "proprio" => $proprio,
                "home" => "http://localhost",
                "lista" => "http://localhost/listaproprio",
                "base_url" => BASE_URL,
                "descricao_label" => "Controle e cadastro de empresa"
            ]
        );
    }

    public function controle($request, $response)
    {
        //VERIFICAMOS SE EXISTE A REQUISIÇÃO POST
        if (isset($_POST) and !empty($_POST)) :
            //CAPTURAMOS OS DADOS DO FORM
            $nome = filter_input(INPUT_POST, 'edtnome', FILTER_SANITIZE_STRING);
            die;
        endif;
    }
}
