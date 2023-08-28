<?php
class main extends Controller
{
    public function index(...$params)
    {
        $this->view('themes/main/index');
        $this->log->createLog();
    }
}
