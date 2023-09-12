<?php

namespace App\middleware;

use App\helpers\functions;

class personalMw extends \Controller
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
        $firstNameinput = $datas['firstNameinput'];
        $lastNameinput = $datas['lastNameinput'];
        $birthDay = $datas['birthDay'];
        $gender = $datas['gender'];
        $nationality = $datas['nationality'];
        $driverLicence = $datas['driverLicence'];
        $militaryStatus = $datas['militaryStatus'];
        $content = $datas['content'];
        $data = [
            'Name' => $firstNameinput,
            'LastName' => $lastNameinput,
            'BirthDay' => $birthDay,
            'Gender' => $gender,
            'Nationality' => $nationality,
            'DriveDocument' => $driverLicence,
            'MilitaryStatus' => $militaryStatus,
            'About' => $content,
            'Guid' => $this->utils->generateGuid(),
            'UserGuid' => USERGUID,
            'CreatedDate' => date('Y-m-d H:i:s'),
            'UpdatedDate' => date('Y-m-d H:i:s'),
        ];
        $data = $this->model('sampleModel')->addData('profile_personal', $data);
        if ($data) {
            $jData = [
                'status' => 'success',
                'message' => 'Personal added successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Personal not added'
            ];
        }

        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function Update($datas)
    {

        $firstNameinput = $datas['firstNameinput'];
        $lastNameinput = $datas['lastNameinput'];
        $birthDay = $datas['birthDay'];
        $gender = $datas['gender'];
        $nationality = $datas['nationality'];
        $driverLicence = $datas['driverLicence'];
        $militaryStatus = $datas['militaryStatus'];
        $content = $datas['content'];
        $data = [
            'Name' => $firstNameinput,
            'LastName' => $lastNameinput,
            'BirthDay' => $birthDay,
            'Gender' => $gender,
            'Nationality' => $nationality,
            'DriveDocument' => $driverLicence,
            'MilitaryStatus' => $militaryStatus,
            'About' => $content,
            'CreatedDate' => date('Y-m-d H:i:s'),
            'UpdatedDate' => date('Y-m-d H:i:s'),
        ];
        $data = $this->model('sampleModel')->updateData('profile_personal', $data, ['UserGuid' => USERGUID]);
        if ($data) {
            $jData = [
                'status' => 'success',
                'message' => 'Personal updated successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Personal not updated'
            ];
        }

        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function Delete($datas)
    {
        $guid = $datas['guid'];
        $data = $this->model('sampleModel')->deleteData('profile_personal', ['UserGuid' => USERGUID]);
        if ($data) {
            $jData = [
                'status' => 'success',
                'message' => 'Personal deleted successfully'
            ];
        } else {
            $jData = [
                'status' => 'error',
                'message' => 'Personal not deleted'
            ];
        }
        return json_encode($jData, JSON_UNESCAPED_UNICODE);
    }
    public function getAll()
    {
        $datas = $this->model('sampleModel')->getData('profile_personal', ['UserGuid' => USERGUID]);
        if ($datas) {
            return $datas;
        } else {
            return false;
        }
    }
    public function get()
    {
        $data = $this->model('sampleModel')->getOneData('profile_personal', ['UserGuid' => USERGUID]);
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
}
