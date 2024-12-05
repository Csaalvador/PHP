<?php

require_once 'app/core/core.php';
require_once 'app/controller/HomeControler.php';
require_once 'app/controller/ErroControLler.php';


$template = file_get_contents('app/template/estrutura.html');

ob_start();
    $core = new Core;
    $core->start($_GET);

    $saida = ob_get_contents();
ob_end_clean();

$tplpronto = str_replace('{{areaDinamica}}', $saida, $template);

echo $tplpronto;