<div class="form-group">
    <label class="col-md-2 text-left control-label col-form-label text-muted">First Name</label>
    <div class="col-md-12">
        <input type="text" placeholder="Enter First Name" class="form-control form-control-line" name="fname" value="<?php// echo $user['fname']; ?>"required  >
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 text-left control-label col-form-label text-muted">Middle Name</label>
    <div class="col-md-12">
        <input type="text" placeholder="Enter Last Name" class="form-control form-control-line" name="mname" value="<?php// echo $user['mname']; ?>">
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 text-left control-label col-form-label text-muted">Last Name</label>
    <div class="col-md-12">
        <input type="text" placeholder="Enter Last Name" class="form-control form-control-line" name="lname" value="<?php// echo $user['lname']; ?>"required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 text-left control-label col-form-label text-muted">Email</label>
    <div class="col-md-12">
        <input type="email" placeholder="Enter Email" class="form-control form-control-line" name="email" value="<?php// echo $user['email']; ?>"required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2 text-left control-label col-form-label text-muted">Contact</label>
    <div class="col-md-12">
        <input type="text" placeholder="Enter Contact Number" class="form-control form-control-line" name="contact" value="<?php// echo $user['contact']; ?>"required>
    </div>
</div>

<div class="form-group text-right">
    <div class="col-sm-12">
        <input type="text"  class="form-control form-control-line" name="merchant_id" value="<?php echo $merchant_id; ?>" hidden>

         <button class="btn btn-dark wave-light" type="Reset" >Reset</button>
         <button class="btn btn-primary wave-light" type="submit" name="update_profile">Update Profile</button>
    </div>
</div>