<div class="small-box bg-default" style="background-color:white;">
<div class="card-body">
    <center class="mt-4">
        <img id="imageResult" height="150" width="150" src="<?= ASSETS?>/images/profile.jpg" class="img-circle " alt="User Image" width="150">
        <?php //echo (!empty($user['photo'])) ? '../images/merchant/'.$user['photo'] : ' ../images/profile.jpg'; ?>
        <h4 class="card-subtitle mt-2"><?php// echo $user['fname'] . ' '. $user['mname'] . ' ' . $user['lname']; ?></h4>
        <h5 class="card-subtitle">Merchant</h5>
</center>

</div>
 <hr>
<div class="card-body" style="margin-left:30px;">
                    
    <small class="text-muted">Business Code</small>
    <h6><?php //echo $user['store_code']; ?></h6>

    <small class="text-muted">Card Number</small>
    <h6><?php// echo $user['card_code']; ?></h6>

    <small class="text-muted">Email address</small>
    <h6><a href="mailto:<?php// echo $user['email']; ?>"><?php// echo $user['email']; ?></a></h6>

    <small class="text-muted pt-4 db">Phone</small>
    <h6><a href="tel:<?php// echo $user['contact']; ?>"><?php// echo $user['contact']; ?></a></h6>

    <small class="text-muted">Address</small>
    <h6><?php// echo $user['street'] . ', ' . $user['city'] . ', ' . $user['province']; ?></h6>
</div></div>
