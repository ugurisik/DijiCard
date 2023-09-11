<?php

use App\middleware;

class profile extends Controller
{
    public function index(...$params)
    {
        $this->view('admin', 'index', $params);
    }
    public function bank(...$params)
    {
        $bankMw = new middleware\bankMw;
        $datas = $bankMw->getAll();
        if (isset($params[2])) {
            if ($params[2] == 'add') {
                echo $bankMw->AddBank($_POST);
            } elseif ($params[2] == 'delete') {
                echo $bankMw->DeleteBank($_POST);
            } elseif ($params[2] == 'update') {
                echo $bankMw->UpdateBank($_POST);
            } else {
                $data = $bankMw->get($params[2]);
                $this->view('admin', 'bank', ['datas' => $datas, 'data' => $data]);
            }
        } else {
            $this->view('admin', 'bank', ['datas' => $datas]);
        }
    }
    public function bussiness(...$params)
    {
        $this->view('admin', 'bussiness', $params);
    }
    public function contact(...$params)
    {
        $this->view('admin', 'contact', $params);
    }
    public function education(...$params)
    {
        $this->view('admin', 'education', $params);
    }
    public function experience(...$params)
    {
        $this->view('admin', 'experience', $params);
    }
    public function gallery(...$params)
    {
        $this->view('admin', 'gallery', $params);
    }
    public function hobbies(...$params)
    {
        $this->view('admin', 'hobbies', $params);
    }
    public function licences(...$params)
    {
        $this->view('admin', 'licences', $params);
    }
    public function location(...$params)
    {
        $this->view('admin', 'location', $params);
    }
    public function personal(...$params)
    {
        $this->view('admin', 'personal', $params);
    }
    public function socialmedia(...$params)
    {
        $this->view('admin', 'socialmedia', $params);
    }
}
