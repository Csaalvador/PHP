<?php 

session_start();

$rotas_permitidas = require_once('../inc/rotas.php');

$rota = $_GET['rota'] ?? 'home';

if(!isset($_SESSION['usuario']) && $rota !== 'loginSubmit'){
    $rota = 'login';
}

if(isset($_SESSION['usuario']) && $rota == 'login'){
    $rota = 'home';
}

if(!in_array($rota, $rotas_permitidas)){
    $rota = '404';
}

$script = null;
switch($rota){
    case '404':
        $script = '404.php';
        break;

        case 'login':
            $script = 'login.php';
            break;

            case 'home':
                $script = 'home.php';
                break;

                case 'loginSubmit':
                    $script = 'loginSubmit.php';
                    break;

                    case 'logout':
                        $script = 'logout.php';
                        break;
}

require_once __DIR__ . '/../inc/dbconfig.php';
require_once __DIR__ . '/../inc/database.php';
require_once __DIR__ . '/../inc/header.php';
require_once __DIR__ . "/../scripts/$script";
require_once __DIR__ . '/../inc/footer.php';
