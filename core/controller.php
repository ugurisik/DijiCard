<?php

use App\helpers\logs\logManager as logManager;
use App\helpers\session\sessionManager as sessionManager;
use App\helpers\security\securityManager as security;
use App\helpers\mail\phpMail as phpMail;
use App\helpers\functions\mailFunction as mailFunction;
use App\helpers\errors\error as error;

class Controller
{
    public $log;
    public $session;
    public $security;
    public $mail;
    public $mailFunction;
    public $error;
    public function __construct()
    {
        $this->log = new logManager;
        $this->session = new sessionManager;
        $this->security = new security;
        $this->mail = new phpMail;
        $this->mailFunction = new mailFunction;
        $this->error = new error;        
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
