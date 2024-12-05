<?php

require_once 'User.php'; // Certifique-se de que está no mesmo diretório ou ajuste o caminho
require_once 'Product.php';

class Order
{
    private $user;
    private $products = [];
    private $totalPrice = 0;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
        $this->totalPrice += $product->getPrice();
    }

    public function getSummary()
    {
        $summary = "Pedido para: " . $this->user->getName() . PHP_EOL;
        $summary .= "Produtos: " . PHP_EOL;
        foreach ($this->products as $product) {
            $summary .= "- " . $product->getName() . " (R$ " . $product->getPrice() . ")" . PHP_EOL;
        }
        $summary .= "Total: R$ " . $this->totalPrice . PHP_EOL;

        return $summary;
    }
}
