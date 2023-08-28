<?php

class Controller
{
    public function __construct()
    {
        echo 'Controller is working';
    }

    public function view($file, $params = [])
    {
        if (file_exists(VIEW_PATH . $file . '.php')) {
            require_once VIEW_PATH . $file . '.php';
        } else {
            header("HTTP/1.0 404 Not Found");
            exit('404 Not Found');
        }
    }

    public function model($file)
    {
        if (file_exists(MODEL_PATH . $file . '.php')) {
            require_once MODEL_PATH . $file . '.php';
            if (stripos($file, '/')) {
                $file = explode('/', $file);
                $file = end($file);
            }
            if (class_exists($file)) {
                return new $file;
            } else {
                header("HTTP/1.0 404 Not Found");
                exit('404 Not Found');
            }
        } else {
            header("HTTP/1.0 404 Not Found");
            exit('404 Not Found');
        }
    }
}
