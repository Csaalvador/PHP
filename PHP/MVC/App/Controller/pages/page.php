<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Page {
    public static function getPage($title, $content){
        return View::render('pages/home', [ 
            'title' => $title,
            'content' => $content 
        ]);
    }
}
