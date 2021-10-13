<?php

namespace app\traits;

use Exception;
use Slim\Views\Twig;

trait Template
{
    public function getTwig()
    {
        try {
            //Criamos o Twig e passamos por parâmetro
            //o diretório padrão das views
            return Twig::create(DIR_VIEWS);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    //Método para retornar o nome e o diretório da view
    public function setView($name)
    {
        return $name . EXT_VIEWS;
    }
}
