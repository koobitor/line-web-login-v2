<?php

namespace Line\Utils;

class CommonUtils {

    public static function getToken() {
        $token = bin2hex(random_bytes(16));
        return $token;
    }
}
