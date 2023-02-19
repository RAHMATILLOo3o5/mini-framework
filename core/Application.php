<?php

namespace app\core;

class Application
{

    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public Controller $controller;
    public static Application $app;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
    
    /**
     * getController
     *
     * @return void
     */
    public function getController()
    {
        return $this->controller;
    }    
    /**
     * setController
     *
     * @param  mixed $controller
     * @return void
     */
    public function setController(Controller $controller)
    {
        $this->controller = $controller;
    }
}
