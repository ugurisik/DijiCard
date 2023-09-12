<?php

namespace App\middleware;

use App\helpers\functions;

class contactMw extends \Controller
{
    public $utils;
    public function __construct()
    {
        $this->utils = new functions\utils;
    }
    public function Add($datas)
    {
        if (isset($datas['ContactTitle']) && isset($datas['PhoneNumber']) && isset($datas['Mail']) && !empty($datas['ContactTitle']) && !empty($datas['PhoneNumber']) && !empty($datas['Mail'])) {
            $Title = $datas['ContactTitle'];
            $PhoneNumber = $datas['PhoneNumber'];
            $Mail = $datas['Mail'];
            $data = [
                'Title' => $Title,
                'PhoneNumber' => $PhoneNumber,
                'MailAddress' => $Mail,
                'Guid' => $this->utils->generateGuid(),
                'UserGuid' => USERGUID,
                'CreatedDate' => date('Y-m-d H:i:s'),
                'UpdatedDate' => date('Y-m-d H:i:s'),
            ];
            $data = $this->model('sampleModel')->addData('profile_contact', $data);
            if ($data) {
                $jData = [
                    'status' => 'success',
                    'message' => 'Contact added successfully'
                ];
            } else {
                $jData = [
                    'status' => 'error',
                    'message' => 'Contact not added'
                ];
            }
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Please fill in all fields'
            ];
        }
        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function Update($datas)
    {
        if (isset($datas['ContactTitle']) && isset($datas['PhoneNumber']) && isset($datas['Mail']) && !empty($datas['ContactTitle']) && !empty($datas['PhoneNumber']) && !empty($datas['Mail'])) {
            $ContactTitle = $datas['ContactTitle'];
            $PhoneNumber = $datas['PhoneNumber'];
            $Mail = $datas['Mail'];
            $data = [
                'Title' => $ContactTitle,
                'PhoneNumber' => $PhoneNumber,
                'MailAddress' => $Mail,
                'UpdatedDate' => date('Y-m-d H:i:s'),
            ];
            $data = $this->model('sampleModel')->updateData('profile_contact', $data, ['Guid' => $datas['guid']]);
            if ($data) {
                $jData = [
                    'status' => 'success',
                    'message' => 'Contact updated successfully'
                ];
            } else {
                $jData = [
                    'status' => 'error',
                    'message' => 'Contact not updated'
                ];
            }
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Please fill in all fields'
            ];
        }
        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function Delete($datas)
    {
        $guid = $datas['guid'];
        $data = $this->model('sampleModel')->deleteData('profile_contact', ['Guid' => $guid]);
        if ($data) {
            $jData = [
                'status' => 'success',
                'message' => 'Contact deleted successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Contact not deleted'
            ];
        }
        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function getAll()
    {
        $datas = $this->model('sampleModel')->getData('profile_contact', ['UserGuid' => USERGUID]);
        if ($datas) {
            return $datas;
        } else {
            return false;
        }
    }
    public function get($guid)
    {
        $data = $this->model('sampleModel')->getOneData('profile_contact', ['Guid' => $guid]);
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
}
