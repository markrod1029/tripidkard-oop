<?php

/**
 *  Home Controller
 */

class Home extends Controller
{
    function index()
    {
    
        if (!Auth::logged_in('enterprise')) {
            $this->redirect('login');
        }

        
        $merchant = new Merchant() ;

        $data = $merchant->findAll();
        $this->view('home');
        // $this->view('home', ['rows'=>$data]);

    }
}

//  // code....
//  $merchant = new Merchant();


//  // $merchant = $this->load_model('Merchant');
//  $arr['fname'] = 'Boom1';
//  // $arr['mname'] = 'C';
//  $arr['lname'] = 'Boom1';
//  // $arr['contact'] = '09989698160';
//  // $arr['email'] = 'Boom.shawarma@gmail.com';
//  // $arr['password'] = '$2y$10$YGV4kS3r083f09gBCPz0P.3GQTCmiYuoyeQUlnUWQqm7FyJOlfnG2';
//  // $arr['position'] = 'Merchant';
//  // $merchant->insert($arr);

//  // $data = $db->query("SELECT * FROM merchant");
//  //  $data = $merchant->where('email', 'sqzy.spa@gmail.com');

//  $data = $merchant->findAll();

//  // $merchant->insert($arr);
//  // $merchant->update(31, $arr);
//  $merchant->delete(37);
 
//  $this->view('home', ['rows'=>$data]);
