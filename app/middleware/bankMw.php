<?php

namespace App\middleware;

use App\helpers\functions;

class bankMw extends \Controller
{
    public $utils;
    public function __construct()
    {
        $this->utils = new functions\utils;
    }
    public function AddBank($datas)
    {
        if (isset($datas['cc-name']) && isset($datas['cc-number']) && isset($datas['cc-bank']) && !empty($datas['cc-name']) && !empty($datas['cc-number']) && !empty($datas['cc-bank'])) {
            $ccName = $datas['cc-name'];
            $ccNumber = $datas['cc-number'];
            $ccBank = $datas['cc-bank'];
            $data = [
                'Name' => $ccName,
                'IBAN' => $ccNumber,
                'BankName' => $ccBank,
                'Guid' => $this->utils->generateGuid(),
                'UserGuid' => USERGUID,
                'CreatedDate' => date('Y-m-d H:i:s'),
                'UpdatedDate' => date('Y-m-d H:i:s'),
            ];
            $bank = $this->model('sampleModel')->addData('profile_bank_information', $data);
            if ($bank) {
                $jData = [
                    'status' => 'success',
                    'message' => 'Bank added successfully'
                ];
            } else {
                $jData = [
                    'status' => 'error',
                    'message' => 'Bank not added'
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
    public function UpdateBank($datas)
    {
        if (isset($datas['cc-name']) && isset($datas['cc-number']) && isset($datas['cc-bank']) && !empty($datas['cc-name']) && !empty($datas['cc-number']) && !empty($datas['cc-bank'])) {
            $ccName = $datas['cc-name'];
            $ccNumber = $datas['cc-number'];
            $ccBank = $datas['cc-bank'];
            $data = [
                'Name' => $ccName,
                'IBAN' => $ccNumber,
                'BankName' => $ccBank,
                'UpdatedDate' => date('Y-m-d H:i:s'),
            ];
            $bank = $this->model('sampleModel')->updateData('profile_bank_information', $data, ['Guid' => $datas['guid']]);
            if ($bank) {
                $jData = [
                    'status' => 'success',
                    'message' => 'Bank updated successfully'
                ];
            } else {
                $jData = [
                    'status' => 'error',
                    'message' => 'Bank not updated'
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
    public function DeleteBank($datas)
    {
        $guid = $datas['guid'];
        $bank = $this->model('sampleModel')->deleteData('profile_bank_information', ['Guid' => $guid]);
        if ($bank) {
            $jData = [
                'status' => 'success',
                'message' => 'Bank deleted successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Bank not deleted'
            ];
        }
        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function getAll()
    {
        $banks = $this->model('sampleModel')->getData('profile_bank_information', ['UserGuid' => USERGUID]);
        if ($banks) {
            return $banks;
        } else {
            return false;
        }
    }
    public function get($guid)
    {
        $bank = $this->model('sampleModel')->getOneData('profile_bank_information', ['Guid' => $guid]);
        if ($bank) {
            return $bank;
        } else {
            return false;
        }
    }
}
