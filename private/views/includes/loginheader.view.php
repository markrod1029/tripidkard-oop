

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>Tripidkard | Login Form </title> 
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/login.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
         <!-- Link Bootstrap JS and JQuery -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Toast -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  </head>

    
  
<script>

function showpassword(icon){
var passwordInput = document.getElementById("password");
if(passwordInput.type == "password"){
  passwordInput.type = "text";
  icon.innerHTML = '<span class="fa fa-fw fa-eye-slash"></span>';
}
else {
  passwordInput.type = "password";
  icon.innerHTML = '<span class="fa fa-fw fa-eye"></span>';
}
}

</script>


<style>

.wrapper form .row .toggle-password {
position: absolute;
right: 5%; /* Adjust the percentage as needed */
height: 100%;
display: flex;
align-items: center;
justify-content: center;
color: #2585bc;
}

</style>

<?php
        // if(isset($_SESSION['error'])){
        //   echo " <br>
        //     <div class='alert alert-danger alert-dismissible'>
        //       ".$_SESSION['error']."
        //        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        //     </div>
        //   ";;
        //   unset($_SESSION['error']);
        // }
        // if(isset($_SESSION['success'])){
        //   echo "
        //     <div class='alert alert-success alert-dismissible'>
        //       ".$_SESSION['success']."
        //       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>

        //     </div>
        //   ";
        //   unset($_SESSION['success']);
        // }
      ?>