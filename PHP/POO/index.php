<?php

// Incluindo as classes
require_once 'User.php';
require_once 'Product.php';
require_once 'Order.php';

// Criando um usuário
$user = new User("Cauã", "caua@example.com");

// Criando produtos
$product1 = new Product(1, "Notebook", 2500);
$product2 = new Product(2, "Teclado Mecânico", 450);

$order = new Order($user);
$order->addProduct($product1);
$order->addProduct($product2);

echo $order->getSummary();
