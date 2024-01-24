<?php

/**
 *  Merchant Model
 */

 class Merchant extends Model
 {

    protected $table = "merchant";
    
    protected $allowedColumns = [
      'fname',
      'mname',
      'lname',
      'contact',
      'email',
      'password',
      'position',
      'created_at',
    ];


    protected $beforeInsert = [
      'make_merchant_id',
      'store_code',
      'hash_password'
    ];

   
    public function validate($DATA)
    {

      $this->errors = array();

      if  (empty($DATA['fname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['fname']))
      {
         $this->errors['fname'] = "Only Letters Allowed";

      }
    
      if(count($this->errors) == 0)
      {
         return true;
      }
      return false;
    }

    public function make_merchant_id($data)
    {
      $data['merchant_id'] = $this->ramdom_string(16);
      return $data;
    }
 
    public function store_code($data)
    {
      if(!isset($_SESSION['USER']->store_code))
      {
      $data['store_code'] = $_SESSION['MERCHANT']->store_code;
         
      }
      return $data;
      
    }

    public function hash_password($data)
    {
      $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
      return $data;
    }

    private function ramdom_string($length)
    {

      $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
      $text = "";
  
      for($x = 0; $x < $length; $x++)
      {
  
          $random = rand(0,61);
          $text .= $array[$random];
      }
    }
 }