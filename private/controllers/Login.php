<?php

/**
 * Home Controller
 */
class Login extends Controller
{
    public function index()
    {
        // Check if the user is already logged in
        if (Auth::logged_in()) {
            $this->redirectBasedOnUserType(Auth::user());
        }

        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $admin = new Admin();

            if ($row = $admin->authentication('email', $_POST['email'])) {
                $row = $row[0];
                if (password_verify($_POST['password'], $row->password)) {
                    Auth::authenticate($row);
                    $this->redirectBasedOnUserType($row);
                }
            } else {
                $errors['email'] = "Invalid Email or Password";
            }
        }

        $this->view('login', ['errors' => $errors]);
    }

    private function redirectBasedOnUserType($row)
    {
        switch ($row->user_type) {
            case 'merchant':
                $this->redirect('/merchant/home');
                break;
            case 'enterprise':
                $this->redirect('/enterprise/home');
                break;
            case 'tenant':
                $this->redirect('/tenant/home');
                break;
            default:
                $this->redirect('/login');
        }
    }
}
