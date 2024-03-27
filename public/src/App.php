<?php

class App {

    var $controller = 'home';
    var $method = 'index';
    var $params = [];

    public function __construct() {

        $url = $this->parseURL();

        if(isset($url[0]) && file_exists('src/controller/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once 'src/controller/' . $this->controller . '.php';
        $this->controller = new $this->controller();

        if(isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseURL() {
        if(isset($_GET['url'])) {
            $trimmed_url = rtrim($_GET['url'], '/');
            $sanitized_url = filter_var($trimmed_url, FILTER_SANITIZE_URL);
            return explode('/', $sanitized_url);
        }
    }

}

?>