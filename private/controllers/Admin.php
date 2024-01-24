<?php

/**
 *  Admin Controller
 */

class Admin extends Controller
{
    function index()
    {
         $this->view('admin/home');
    }
}