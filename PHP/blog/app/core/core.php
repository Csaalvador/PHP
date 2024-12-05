<?php

Class Core
{
    public static function start($urlGet){
        $acao = 'index';

        if(isset($urlGet['pagina'])){
            $pagina = ucfirst($urlGet['pagina']. 'Controller');
        } else {
            $pagina = 'HomeController';
                }
        if(!class_exists($pagina)){
            $pagina = 'ErroController';
        }  

            call_user_func_array(array(new $pagina, $acao), array());
    }
}
