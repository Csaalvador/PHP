<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home extends Page
{
    public static function getHome()
    {
     
        $content = View::render('pages/home', [
            'name' => 'Cauã Salvador',
            'description' => 'programador PHP'    
        ]);

        return parent::getPage('PHP - HOME', $content);
    }
}
