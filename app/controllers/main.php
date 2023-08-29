<?php
class main extends Controller
{
    public function index(...$params)
    {
        $this->view('themes/main/index');
        $this->log->createLog();
        print_r($this->security::getLang());
        $this->mail;
        $this->mailFunction;
    }
    public function test(){
        echo 'test';
    }
}
