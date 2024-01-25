<?php
/**
 * 
 *  Authentication class
 */

 class Auth 
 {

    public static function authenticate($row)
    {
        $_SESSION['USER'] = $row;

        // Set the user type based on the condition
        if ($row->user_type === 'merchant') {
            if ($row->enterprise_id > 0) {
                $_SESSION['tenant'] = $row;
            } else {
                $_SESSION['merchant'] = $row;
            }
        } elseif ($row->user_type === 'enterprise') {
            $_SESSION['enterprise'] =$row;
        }
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