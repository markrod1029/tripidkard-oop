<?php
/**
 * 
 *  Authentication class
 */
class Auth 
{
    public static function authenticate($row)
    {
        // Set the user type based on the condition
        if ($row->user_type === 'merchant') {
            if ($row->enterprise_id > 0) {
                $_SESSION['USER'] = $_SESSION['tenant'] = $row;
            } else {
                $_SESSION['USER'] = $_SESSION['merchant'] = $row;
            }
        } elseif ($row->user_type === 'enterprise') {
            $_SESSION['USER'] = $_SESSION['enterprise'] = $row;
        }

        // Set a session variable indicating that the user is authenticated
        $_SESSION['authenticated'] = true;
    }
public static function logout()
{
    // Clear user-related sessions
    unset($_SESSION['USER']);
    unset($_SESSION['merchant']);
    unset($_SESSION['enterprise']);
    unset($_SESSION['tenant']);
    unset($_SESSION['authenticated']);

    // Clear all session data
    session_unset();
    session_destroy();
    session_start();

}


    public static function logged_in($userType = null)
    {
        if (!isset($_SESSION['USER']) || !isset($_SESSION['authenticated'])) {
            return false;
        }

        // If a specific user type is specified, check for that type
        if ($userType) {
            switch ($userType) {
                case 'merchant':
                    return isset($_SESSION['merchant']);
                case 'enterprise':
                    return isset($_SESSION['enterprise']);
                case 'tenant':
                    return isset($_SESSION['tenant']);
                default:
                    return false;
            }
        }

        // If no specific user type is specified, return true for any logged-in user
        return true;
    }

    public static function user()
    {
        // Return the user session
        return $_SESSION['USER'] ?? null;
    }
}
