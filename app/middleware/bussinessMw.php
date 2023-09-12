<?php

namespace App\middleware;

use App\helpers\functions;

class bussinessMw extends \Controller
{
    public $utils;
    public function __construct()
    {
        $this->utils = new functions\utils;
    }
    public function Add($datas)
    {

        $companyName = $datas['companyName'];
        $companySector = $datas['companySector'];
        $companyBussinessArea = $datas['companyBussinessArea'];
        $companyOperation = $datas['companyOperation'];
        $startDate = $datas['startDate'];
        $endDate = $datas['endDate'];
        $content = $datas['content'];
        $address = $datas['address'];
        $address2 = $datas['address2'];
        $country = $datas['country'];
        $state = $datas['state'];
        $zip = $datas['zip'];
        $data = [
            'Guid' => $this->utils->generateGuid(),
            'UserGuid' => USERGUID,
            'CreatedDate' => date('Y-m-d H:i:s'),
            'UpdatedDate' => date('Y-m-d H:i:s'),
            'CompanyName' => $companyName,
            'CompanySector' => $companySector,
            'BussinessArea' => $companyBussinessArea,
            'WorkType' => $companyOperation,
            'StartDate' => $startDate,
            'EndDate' => $endDate,
            'JobDecription' => $content,
            'CompanyAddress' => $address,
            'CompanyAddress2' => $address2,
            'Country' => $country,
            'City' => $state,
            'PostalCode' => $zip,
        ];
        $data = $this->model('sampleModel')->addData('profile_bussiness', $data);
        if ($data) {
            $jData = [
                'status' => 'success',
                'message' => 'Bussiness added successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Bussiness not added'
            ];
        }

        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function Update($datas)
    {

        $companyName = $datas['companyName'];
        $companySector = $datas['companySector'];
        $companyBussinessArea = $datas['companyBussinessArea'];
        $companyOperation = $datas['companyOperation'];
        $startDate = $datas['startDate'];
        $endDate = $datas['endDate'];
        $content = $datas['content'];
        $address = $datas['address'];
        $address2 = $datas['address2'];
        $country = $datas['country'];
        $state = $datas['state'];
        $zip = $datas['zip'];
        $data = [
            'Guid' => $this->utils->generateGuid(),
            'UserGuid' => USERGUID,
            'CreatedDate' => date('Y-m-d H:i:s'),
            'UpdatedDate' => date('Y-m-d H:i:s'),
            'CompanyName' => $companyName,
            'CompanySector' => $companySector,
            'BussinessArea' => $companyBussinessArea,
            'WorkType' => $companyOperation,
            'StartDate' => $startDate,
            'EndDate' => $endDate,
            'JobDecription' => $content,
            'CompanyAddress' => $address,
            'CompanyAddress2' => $address2,
            'Country' => $country,
            'City' => $state,
            'PostalCode' => $zip,
        ];
        $data = $this->model('sampleModel')->updateData('profile_bussiness', $data, ['Guid' => $datas['guid']]);
        if ($data) {
            $jData = [
                'status' => 'success',
                'message' => 'Bussiness updated successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Bussiness not updated'
            ];
        }
        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function Delete($datas)
    {
        $guid = $datas['guid'];
        $data = $this->model('sampleModel')->deleteData('profile_bussiness', ['Guid' => $guid]);
        if ($data) {
            $jData = [
                'status' => 'success',
                'message' => 'Bussiness deleted successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Bussiness not deleted'
            ];
        }
        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function getAll()
    {
        $datas = $this->model('sampleModel')->getData('profile_bussiness', ['UserGuid' => USERGUID]);
        if ($datas) {
            return $datas;
        } else {
            return false;
        }
    }
    public function get($guid)
    {
        $data = $this->model('sampleModel')->getOneData('profile_bussiness', ['Guid' => $guid]);
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
}
