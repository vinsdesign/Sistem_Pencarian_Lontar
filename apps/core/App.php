<?php

class App
{
    // properti
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    // routing
    public function __construct()
    {
        $url = $this->parseURL();
        // apakah ada file di controller
        if (file_exists('./apps/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once './apps/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // apakah ada file di method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params 
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // jalankan controller dan method, serta kirimkan params, jika ada!
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseURL()
    {
        // mengambil url
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
