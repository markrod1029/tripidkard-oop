<?php

/**
 *  Enterprise Controller
 */

 class Enterprise extends Controller
 {
     function home()
     {
         // Check if the user is logged in as an enterprise
         if (!Auth::logged_in('enterprise')) {
             $this->redirect('login');
         }
 
         $this->view('enterprise/home');
     }
 }
 