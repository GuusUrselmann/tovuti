<?php

class Router {

    public $routes = array(
        '' => 'public/controllers/dashboard-controller.php',
        'dashboard' => 'public/controllers/dashboard-controller.php'
    );

    public $routesLoggedOut = array(
        '' => 'public/controllers/login-controller.php',
        'login' => 'public/controllers/login-controller.php'
    );

    public function direct() {
        $uri = str_replace('/'.'workflow'.'/', '', $_SERVER['REQUEST_URI']);
        $uri = rtrim($uri, '/');
        if(strpos($uri, '?'))
        {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }
        if(!array_key_exists($uri, $this->routes)) {
            $uri = '';
        }

        if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']) {
            return $this->routes[$uri];
        }
        else {
            return $this->routesLoggedOut[$uri];
        }
    }
}
