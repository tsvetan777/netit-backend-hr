<?php

namespace controllers;

class SessionController {
    
    public static function setMessage($key, $message) {

        $_SESSION[$key] = $message;
    }

    public static function checkMessage($key) {

        return isset($_SESSION[$key]);
    }

    public static function getMessage($key) {

        if (isset($_SESSION[$key]) && $_SESSION[$key] == 1) {

            $message        = $_SESSION[$key];
            $_SESSION[$key] = NULL;

            return $message;
        }
    }
}


