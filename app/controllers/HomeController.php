<?php

namespace app\controllers;

class HomeController extends Controller
{
    public function home($request, $response)
    {
        //Retorna a view
        return $this->getTwig()->render(
            $response,
            $this->setView("admin/home"),
            [
                "titulo" => "Brand Provedor",
                "logo" => "/img/icon.png",
                "usericon" => "/img/usericon.png",
                "nome" => "Username",
                "link" => "http://localhost/cliente",
                "descricao_label" => "Clientes"
            ]
        );
    }
}
