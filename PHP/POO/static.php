<?php

class Login {
    public static $user;
    public static function verificaLogin(){
        echo "O Usuario:" . self::$user . " está logado!";
    }
}

Login::$user = 'admin';
Login::verificaLogin();