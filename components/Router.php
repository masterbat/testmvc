<?php
class Router{
    private $routes = [];
    public function __construct(){
       $this->routes = include_once "config/routes.php";
    }
    public function run(){

        // 1. нах/одим обработчика
        $handler = $this->getHandler(); // controller из метода getHandler()
        // 2. вызываем метод контроллера
        $this->callHandler($handler);
       
    }



     private function getHandler(){
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $uriFromRoutes => $singleRoute){
            if($uri == $uriFromRoutes){
                break;
            }
        }
        $parts = explode('/', $singleRoute);
        $controllerName = ucfirst($parts[0]).'Controller';
        $actionName = 'action'.ucfirst($parts[1]);
        include "controllers/{$controllerName}.php";
        $controller = new $controllerName();
        return[
             'controller' => $controller, // попадает в $handler в методе run
             'actionName' => $actionName,
        ];

     }
    private function callHandler($handler){
      $handler['controller']->{$handler['actionName']}(); //В PHP7 : {$handler['actionName']}
    }
}