<?php

namespace App\helpers\errors;

class error
{
    static function catch($obj, $status = 500)
    {
        $error = [
            "message" => "Error Message: " . $obj->getMessage(),
            "file_line" => "Error File: " . $obj->getFile() . " Line: " . $obj->getLine(),
            "trace" => $obj->getTraceAsString(),
            "type" => get_class($obj),
            "code" => $obj->getCode(),
            "status" => $status
        ];

        require_once "app/views/Errors.php";
    }
}
