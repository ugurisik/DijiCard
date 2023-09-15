<?php

namespace App\middleware;

use App\helpers\functions;

class socialmediaMw extends \Controller
{
    public $utils;
    public function __construct()
    {
        $this->utils = new functions\utils;
    }
    public function AddOrUpdate($datas = [])
    {
        $data = $this->get();
        if (!$data) {
            return $this->Add($datas);
        } else {
            return $this->Update($datas);
        }
    }
    public function Add($datas)
    {
        $instagram = $datas['instagram'];
        $facebook = $datas['facebook'];
        $threads = $datas['threads'];
        $twitter = $datas['twitter'];
        $linkedin = $datas['linkedin'];
        $mail = $datas['mail'];
        $snapchat = $datas['snapchat'];
        $github = $datas['github'];
        $tiktok = $datas['tiktok'];
        $discord = $datas['discord'];
        $data = [
            'Instagram' => $instagram,
            'Facebook' => $facebook,
            'Threads' => $threads,
            'Twitter' => $twitter,
            'Linkedin' => $linkedin,
            'Mail' => $mail,
            'Snapchat' => $snapchat,
            'Github' => $github,
            'Tiktok' => $tiktok,
            'Discord' => $discord,
            'Guid' => $this->utils->generateGuid(),
            'UserGuid' => USERGUID,
            'CreatedDate' => date('Y-m-d H:i:s'),
            'UpdatedDate' => date('Y-m-d H:i:s'),
        ];
        $data = $this->model('sampleModel')->addData('profile_social_media', $data);
        if ($data) {
            $jData = [
                'status' => 'success',
                'message' => 'Social Media added successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Social Media not added'
            ];
        }

        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function Update($datas)
    {

        $instagram = $datas['instagram'];
        $facebook = $datas['facebook'];
        $threads = $datas['threads'];
        $twitter = $datas['twitter'];
        $linkedin = $datas['linkedin'];
        $mail = $datas['mail'];
        $snapchat = $datas['snapchat'];
        $github = $datas['github'];
        $tiktok = $datas['tiktok'];
        $discord = $datas['discord'];
        $data = [
            'Instagram' => $instagram,
            'Facebook' => $facebook,
            'Threads' => $threads,
            'Twitter' => $twitter,
            'Linkedin' => $linkedin,
            'Mail' => $mail,
            'Snapchat' => $snapchat,
            'Github' => $github,
            'Tiktok' => $tiktok,
            'Discord' => $discord,
            'UpdatedDate' => date('Y-m-d H:i:s'),
        ];
        $data = $this->model('sampleModel')->updateData('profile_social_media', $data, ['UserGuid' => USERGUID]);
        if ($data) {
            $jData = [
                'status' => 'success',
                'message' => 'Social Media updated successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Social Media not updated'
            ];
        }

        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function Delete($datas)
    {
        $guid = $datas['guid'];
        $data = $this->model('sampleModel')->deleteData('profile_social_media', ['UserGuid' => USERGUID]);
        if ($data) {
            $jData = [
                'status' => 'success',
                'message' => 'Social Media deleted successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Social Media not deleted'
            ];
        }
        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function getAll()
    {
        $datas = $this->model('sampleModel')->getData('profile_social_media', ['UserGuid' => USERGUID]);
        if ($datas) {
            return $datas;
        } else {
            return false;
        }
    }
    public function get()
    {
        $data = $this->model('sampleModel')->getOneData('profile_social_media', ['UserGuid' => USERGUID]);
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
}
