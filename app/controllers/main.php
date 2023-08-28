<?php
class main extends Controller
{
    public function index(...$params)
    {
        echo '<br>';
        echo 'main controller is working';
        echo '<br>';
        echo '<pre>';
        print_r($params);
        echo '</pre>';
        echo '<br>';
        $this->view('main/index');
    }
}
