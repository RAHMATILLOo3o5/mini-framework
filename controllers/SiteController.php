<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{

    public function home()
    {
        $params = ['name' => 'Rahmatillo'];
        return $this->render('home', $params);
    }

    public function handleData(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
        exit;
        return "Handle data";
    }

    public function contact()
    {
        return $this->render('contact');
    }
}
