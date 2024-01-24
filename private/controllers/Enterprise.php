<?php

/**
 *  Enterprise Controller
 */

class Enterprise extends Controller
{
    function index()
    {
         $this->view('enterprise/home');
    }
}