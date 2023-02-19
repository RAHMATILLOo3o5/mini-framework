<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{    
    /**
     * login
     *
     * @return void
     */
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }
        
    /**
     * register
     *
     * @return void
     */
    public function register(Request $request)
    {
        if($request->isPost()){
            return "Handle data";
        }
        $this->setLayout('auth');
        return $this->render('register');
    }
}
