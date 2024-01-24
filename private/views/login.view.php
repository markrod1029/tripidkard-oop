<?php $this->view('includes/loginheader')?>

  <body>

	  
  <div class="container">

      <div class="wrapper">
        <div class="title"><span>TripidKard Sign In</span></div>
      
        <form method="POST" >

                
          <?php if (count($errors) >0): ?>
                              
              <div class='alert alert-danger alert-dismissible'>
                  <?php foreach($errors as $error): ?>
                      <?= $error ?>
                  <?php endforeach; ?>

                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              </div>

          <?php endif;?>
          
          <div class="row">
            <i class="fas fa-user icon"></i>
            <input type="text" name="email" value="<?= get_var('email')?>" placeholder="Email or Phone" required>
           
          </div>
          <div class="row">
              <i class="fas fa-lock icon"></i>
              <!-- Show/hide password toggle button -->
              <span class="toggle-password"  onclick="showpassword(this)">
                <span class="fa fa-fw fa-eye"></span>
              </span>

              <input type="password" name="password"  value="<?= get_var('password')?>" id="password" placeholder="Password" required>
            </div>
                        <!-- <div class="pass"><a href="#">Forgot password?</a></div> -->
          <div class="row button">
            <input type="submit" name="login" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="https://tripidkard.com/merchant-details">Signup now</a></div>
        </form>
      </div>
    </div>
  </body>
</html>
