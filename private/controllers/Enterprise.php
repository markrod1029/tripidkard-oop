<?php

// File: private/controllers/enterprise/Home.php


class Enterprise extends Controller
{
    function index()
    {
        // Check if the user is logged in as an enterprise
        if (!Auth::logged_in('enterprise')) {
            $this->redirect('login');
        }

        $this->view('enterprise/home');
    }
}
