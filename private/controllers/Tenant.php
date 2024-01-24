<?php

/**
 *  Tenant Controller
 */

class Tenant extends Controller
{
    function index()
    {
         $this->view('Tenant/home');
    }
}