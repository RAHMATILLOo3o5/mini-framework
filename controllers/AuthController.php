<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

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
        $register = new RegisterModel();
        $this->setLayout('auth');
        if ($request->isPost()) {
            $register->load($request->getBody());
            
            if ($register->validate() && $register->register()) {
                return "Success";
            }
            
            return $this->render('register', [
                'model' => $register
            ]);
        }
        return $this->render('register', [
            'model' => $register
        ]);
    }
}
