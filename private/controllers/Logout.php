<?php

/**
 *  Logout Controller
 */

class Logout extends Controller
{
    function index()
    {
    
       Auth::logout();
            $this->redirect('login');

        $this->view('home');

    }
}

