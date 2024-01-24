<?php

/**
 *  Home Controller
 */

class Login extends Controller
{
    function index()
    {
        // code....
        $errors = array();

        if(count($_POST) > 0)
        {
            $admin = new Admin();
           
            if($row = $admin->where('email', $_POST['email']))
            {
                $row = $row[0];
                if(password_verify($_POST['password'], $row->password))
                {
                    Auth::authenticate($row);
                    $this->redirect('/home');
                }
                
            } 
                $errors['email'] = "Invalid Email or Password";
        }
      

         $this->view('login',[
            'errors'=>$errors,
        ]);


    }
}