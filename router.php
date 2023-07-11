<?php
require 'controller/controller.php';
class Router
{
    public $route = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new Controller();
    }

    public function get($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET'
        ];
    }

    public function post($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function put($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function delete($uri, $action)
    {
        $this->route[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function routes($uri, $method)
    {
        foreach ($this->route as $routers) {
            if ($routers['uri'] === $uri && $routers['method'] === $method) {
                $action = $routers['action'];
                switch ($action) {
                    case 'form':
                        $this->controller->form();
                        break;
                    case 'DbPage':
                        $this->controller->DbPage();
                        break;
                    case 'tablePage':
                        $this->controller->tablePage();
                        break;
                    case 'createDb':
                        $this->controller->createDb($_POST);
                        break;
                    case 'getAllDB':
                        $this->controller->getAllDB();
                        break;
                    case 'createTable':
                        $this->controller->createTable($_POST);
                        break;
                    case 'createColumn';
                        $this->controller->createColumn($_POST);
                        break;
                    case 'insertValues';
                        $this->controller->insertValues($_POST);
                        // print_r($_POST);
                        break;
                }
            }
        }
    }
}
