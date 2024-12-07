<?php

require 'classesNamespace/produtos.php';
require 'modelNamespace/produto.php';

use models\Produto as pm;
use classes\Produto as pc;

$produto = new pm();
$produto2 = new pc();

$produto2 ->mostrarDetalhes();
$produto->mostrarDetalhes();