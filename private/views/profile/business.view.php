<?php 
// Prepare and execute the SQL query using a prepared statement
// $sql = "SELECT *, enterprise.discount AS enterprise_discount FROM business 
// LEFT JOIN enterprise ON enterprise.id = business.enterprise_id WHERE merchant_id = ?";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("s", $_SESSION['merchant']);
// $stmt->execute();
// $result = $stmt->get_result();
// // Fetch user details
// $business_user = $result->fetch_assoc();
?>

<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">Business Name</label>
    <div class="col-md-12">
        <input type="text"  class="form-control form-control-line" name="business_name" value="<?php// echo $user['business_name']; ?>"required  >
    </div>
</div>

<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">Business Category</label>
    <div class="col-md-12">
        <input type="text"  class="form-control form-control-line" name="business_category" value="<?php// echo $user['business_category']; ?>"required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">Business Sub Category</label>
    <div class="col-md-12">
        <input type="text" class="form-control form-control-line" name="business_sub_category" value="<?php// echo $user['business_sub_category']; ?>"required>
    </div>
</div>


<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">Zip</label>
    <div class="col-md-12">
        <input type="text"  class="form-control form-control-line" name="zip" value="<?php// echo $user['zip']; ?>"required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">Street</label>
    <div class="col-md-12">
        <input type="text"  class="form-control form-control-line" name="street" value="<?php// echo $user['street']; ?>"required>
    </div>
</div>
                              
<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">City</label>
    <div class="col-md-12">
        <input type="text"  class="form-control form-control-line" name="city" value="<?php// echo $user['city']; ?>"required>
    </div>
</div>

<div class="form-group">
    <label class="col-md-12 text-left control-label col-form-label text-muted">Province</label>
    <div class="col-md-12">
        <input type="text"  class="form-control form-control-line" name="province" value="<?php// echo $user['province']; ?>"required>
    </div>
</div>

<div class="form-group text-right">
    <div class="col-sm-12">
        <input type="text"  class="form-control form-control-line" name="merchant_id" value="<?php echo $merchant_id; ?>" hidden>
        <button class="btn btn-dark wave-light" type="Reset" >Reset</button>
        <button class="btn btn-primary" type="submit" name="update_business">Update Business</button>
    </div>
</div>
                   