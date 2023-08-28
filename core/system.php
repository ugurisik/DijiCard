<?php

class System
{

    protected $controller = 'main';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        $url = $this->checkFile($url);
        $url = $this->checkClass($url);
        $url = $this->checkMethod($url);
        $this->params = $this->clearUrl($url);
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        } else {
            $url[0] = $this->controller;
            $url[1] = $this->method;
            return $url;
        }
    }

    public function checkFile($url = [])
    {
        if (file_exists(CONTROLLER_PATH . $url[0] . '.php')) {
            $this->controller = $url[0];
            require_once CONTROLLER_PATH . $this->controller . '.php';
        } else {
            require_once CONTROLLER_PATH . $this->controller . '.php';
        }
        return $url;
    }

    public function checkMethod($url = [])
    {
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
            }
        } else {
            $this->method = 'index';
        }
        return $url;
    }

    public function checkClass($url = [])
    {
        if (class_exists($this->controller)) {
            $this->controller = new $this->controller;
        }
        return $url;
    }

    public function clearUrl($url = [])
    {
        if ($url[0] == 'main' && $url[1] == 'index') {
            unset($url[0]);
            unset($url[1]);
        }
        return $url;
    }
}
