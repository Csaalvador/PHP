<?php

class User
{
    private $name;
    private $email;

    // Construtor
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // Métodos getters
    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
