<?php

/**
 *  Addmerchant Controller
 */

class Merchant extends Controller
{
    function index()
    {
   
        $errors = array();
        // print_r($_POST);

         if(count($_POST) > 0)
         {
            $merchant = new Merchant();

            if($merchant->validate($_POST))
            {

                // $arr['fname'] = $_POST['fname'];
                // $arr['mname'] = $_POST['mname'];
                // $arr['lname'] = $_POST['lname'];
                // $arr['contact'] = $_POST['contact'];
                // $arr['email'] = $_POST['email'];
                // $arr['password'] = $_POST['fname'];
                // $arr['position'] = 'Merchant';
                $_POST['created_at'] = date('Y-m-d H:i:s');
                $merchant->insert($_POST);

                // $arr['business_name'] = $_POST['business_name'];
                // $arr['business_category'] = $_POST['business_category'];
                // $arr['business_sub_category'] = $_POST['business_sub_category'];
                // $arr['enterprise'] = $_POST['enterprise'];
                // $arr['zip'] = $_POST['zip'];
                // $arr['street'] = $_POST['street'];
                // $arr['city'] = $_POST['city'];
                // $arr['province'] = $_POST['province'];
                // $arr['created_at'] = date('Y-m-d H:i:s');
                // $merchant->delte($arr);


                // $this->redirect('login');

            }else
            {
                // Errors
                $errors = $merchant->errors;

            }

         }
         $this->view('merchant',[
            'errors'=>$errors
            
        ]);


    }
}