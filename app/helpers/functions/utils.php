<?php

namespace App\helpers\functions;


class utils
{
    public function generateGuid()
    {
        return sprintf(
            '%04X%04X-%04X-%04X-%04X-%04X%04X%04X',
            mt_rand(0, 65535),
            mt_rand(0, 65535),
            mt_rand(0, 65535),
            mt_rand(0, 4095),
            bindec(substr_replace(sprintf('%016b', mt_rand(0, 65535)), '01', 6, 2)),
            mt_rand(0, 65535),
            mt_rand(0, 65535),
            mt_rand(0, 65535)
        );
    }
}
