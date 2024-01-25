<?php

/**
 *  Admin Controller
 */

class Admin extends Controller
{
    function index()
    {
        // Check if the user is logged in as an enterprise
        if (!Auth::logged_in('admin')) {
            $this->redirect('login');
        }
         $this->view('admin/home');
    }
}