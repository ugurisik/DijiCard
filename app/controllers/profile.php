<?php

use App\middleware\userMw;

class profile extends Controller
{
    public function index(...$params)
    {
        $this->view('admin','index',$params);
    }
}
