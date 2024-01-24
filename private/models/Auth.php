<?php
/**
 * 
 *  Authentication class
 */

 class Auth 
 {

    public static function authenticate($row)
    {
        // Code
        $_SESSION['USER'] = $row;

    }

    public static function logout()
    {
        // Code
        if(isset($_SESSION['USER']))
        {
            unsent($_SESSION['USER']);
        }

    }

    public static function logged_in()
    {
        // Code
        if(isset($_SESSION['USER']))
        {
            return true;
        }


        return false;

        
    }

    public static function user()
    {
        // Code
        if(isset($_SESSION['USER']))
        {
            return $_SESSION['USER'];
        }


        return false;
        
    }

    public static function __callStatic($method, $params)
    {
        $prop = strtolower(str_replace("get", "", $method));

        if(isset($_SESSION['USER']->$prop))
        {
            return $_SESSION['USER']->$prop;
        }


        return "Unknown";
    }

 }