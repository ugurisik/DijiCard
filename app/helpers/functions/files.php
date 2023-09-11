<?php

namespace App\helpers\functions;

use App\helpers\functions;
use ArtisansWeb\Optimizer;

class files
{
    public $utils;
    public $optimizer;
    public $settings = [];
    public function __construct($maxFileSize = 5, $allowedFileTypes = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4'], $allowedFileExtensions = ['jpg', 'jpeg', 'png', 'gif', 'mp4'])
    {
        $this->utils = new functions\utils;
        $this->optimizer = new Optimizer;
        $this->settings['maxFileSize'] = $this->convertToBytes($maxFileSize);
        $this->settings['allowedFileTypes'] = $allowedFileTypes;
        $this->settings['allowedFileExtensions'] = $allowedFileExtensions;
    }

    public function ImageUpload($file, $path)
    {
        $filePath = $this->FileUpload($file, $path, 'images');
        if ($filePath) {
            $this->optimizer->optimize($filePath);
        }
        return $filePath;
    }

    public function VideoUpload($file, $path)
    {
        return $this->FileUpload($file, $path, 'videos');
    }

    public function FileUpload($file, $path, $type = 'files')
    {
        $filename = "public/" . $type . "/" . date("Y") . "/" . $path;
        if (!is_dir($filename)) {
            mkdir($filename, 0777, true);
        }

        $file_ = $filename . "/" . uniqid() . "_" . strtolower(str_replace(" ", "-", htmlspecialchars($this->utils->TrToEn(basename($file["file"]["name"])))));

        if ($file["file"]["size"] > $this->settings['maxFileSize']) {
            return false;
        }

        if (!in_array($file["file"]["type"], $this->settings['allowedFileTypes'])) {
            return false;
        }

        if (!in_array(pathinfo($file["file"]["name"], PATHINFO_EXTENSION), $this->settings['allowedFileExtensions'])) {
            return false;
        }


        if (move_uploaded_file($file["file"]["tmp_name"], $file_)) {
            return $file_;
        } else {
            return false;
        }
    }

    public function convertToBytes(string $from): ?int
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        $number = substr($from, 0, -2);
        $suffix = strtoupper(substr($from, -2));

        //B or no suffix
        if (is_numeric(substr($suffix, 0, 1))) {
            return preg_replace('/[^\d]/', '', $from);
        }

        $exponent = array_flip($units)[$suffix] ?? null;
        if ($exponent === null) {
            return null;
        }

        return $number * (1024 ** $exponent);
    }
}
