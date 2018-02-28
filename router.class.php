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
        if(isset($_SESSION['user_level'])) {
            if($_SESSION['user_level'] >= 100) {
                $this->routes['createuser'] = 'public/controllers/createuser-controller.php';
            }
        }

        $uri = str_replace('/'.'school'.'/'.'tovuti'.'/', '', $_SERVER['REQUEST_URI']);
        $uri = rtrim($uri, '/');
        if(strpos($uri, '?'))
        {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }

        if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in']) {
            if(!array_key_exists($uri, $this->routes)) {
                $uri = '';
            }
            return $this->routes[$uri];
        }
        else {
            if(!array_key_exists($uri, $this->routesLoggedOut)) {
                $uri = '';
            }
            return $this->routesLoggedOut[$uri];
        }
    }
}
