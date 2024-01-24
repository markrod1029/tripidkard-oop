<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">Old Password</label>
    <div class="col-md-12">
        <input type="password" placeholder="Enter New Password" class="form-control form-control-line" name="old"required>
                                        
    </div>
</div>

<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">New Password</label>
    <div class="col-md-12">
        <input type="password" placeholder="Enter New Password" class="form-control form-control-line" name="new"required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">Confirm Password</label>
    <div class="col-md-12">
        <input type="password" placeholder="Confirm Password" class="form-control form-control-line" name="confirm" required>
    </div>
</div>

<div class="form-group text-right">
    <div class="col-sm-12">
    <input type="text"  class="form-control form-control-line" name="merchant_id" value="<?php echo $merchant_id; ?>" hidden>
        <button class="btn btn-dark wave-light" type="Reset" >Reset</button>
        <button class="btn btn-primary" type="submit" name="update_password">Update Password</button>
    </div>
</div>