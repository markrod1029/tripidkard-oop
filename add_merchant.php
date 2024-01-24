
<?php $this->view('includes/header')?>
<?php //$this->view('includes/menubar')?>
<?php //$this->view('includes/sidebar')?>

<div class="content-wrapper " >

    <!-- <section class="content-header">
        <div class="card" style="position:absolute; top:20px;width:100%; padding:20px 0 20px 0; ">
            <h1 class = "dashboard">Merchants Register</h1>
        
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                <li ><a href="home.php" ><i class="fas fa-dashboard"> &nbsp;</i>Home &nbsp;</a> </li>
                <li class="breadcrumb-item active"> /&nbsp;Merchants Register</li>
                </ol>
        </div>
        </div>
    </section> -->

<section class="content" >
    <div class="row">
        <div class="col-xs-12">
            <div class="card" >

                <div class="box-header with-border" style="background-color:#367FA9;">
                    <div class="card-header">
                        <h4 class="card-title text-white title">Add New Merchant</h4>
                    </div>
                </div>

                <div class="box-body">
                    <div class="card-body">
                
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" >
                
                            <h4 class="card-title text-dark mb-3">Merchant Information</h4><br>

                            <div class="box-body" id="step1">
                                <!-- Step 1: Personal Information -->

                                <div class="input-group mb-3">
                                    <label for="fname" class="col-sm-2 text-right control-label col-form-label text-muted">First Name</label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                            <input type="text" class="form-control" id="fname" name="fname" >
                                        </div>
                                            <span class="text-danger">*</span>
                                </div>


                                <div class="input-group mb-3">
                                    <label for="mname" class="col-sm-2 text-right control-label col-form-label text-muted">Middle Name</label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                            <input type="text" class="form-control" id="mname" name="mname"  placeholder="Optional">
                                        </div>
                                </div>


                                <div class="input-group mb-3">
                                    <label for="lname" class="col-sm-2 text-right control-label col-form-label text-muted">Last Name</label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                            <input type="text" class="form-control" id="lname" name="lname"  >
                                        </div>
                                            <span class="text-danger">*</span>
                                </div>

                                <div class="input-group mb-3">
                                    <label for="contact" class="col-sm-2 text-right control-label col-form-label text-muted">Phone Number</label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
                                            <input type="text" class="form-control" id="contact" name="contact"  >
                                        </div>
                                            <span class="text-danger">*</span>
                                </div>

                            

                                <div class="input-group mb-3">
                                    <label for="email" class="col-sm-2 text-right control-label col-form-label text-muted">Email Address</label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span></div>
                                            <input type="email" class="form-control" id="email" name="email" >
                                        </div>
                                            <span class="text-danger">*</span>
                                </div>

                            
                                
                                <div class=" box-footer text-right">
                                    <button type="button" onclick="nextStep('step1', 'step2')"  class="btn btn-primary">Next</button>
                                </div>

                            </div>

                            <div class="box-body" id="step2" style="display: none;">
                                <!-- Step 2: Business Information -->

                                <div class="input-group mb-3">
                                    <label for="business_name" class="col-sm-2 text-right control-label col-form-label text-muted">Business Name</label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-store"></i></span></div>
                                            <input type="text" class="form-control" id="business_name" name="business_name" >
                                        </div>
                                            <span class="text-danger">*</span>
                                </div>

                        
                                <div class="input-group mb-3">
                                    <label for="business_category" class="col-sm-2 text-right control-label col-form-label text-muted">Business Category</label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-store"></i></span></div>
                                            <input type="text" class="form-control" id="business_category" name="business_category" >
                                        </div>
                                            <span class="text-danger">*</span>
                                </div>

                                <div class="input-group mb-3">
                                    <label for="business_sub_category" class="col-sm-2 text-right control-label col-form-label text-muted">Business Sub Category</label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-store"></i></span></div>
                                            <input type="text" class="form-control" id="business_sub_category" name="business_sub_category" >
                                        </div>
                                            <span class="text-danger">*</span>
                                </div>

                                

                                <div class="input-group mb-3">
                                    <label for="cono1" class="col-sm-2 text-right control-label col-form-label text-muted">Enterprise</label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-home"></i></span></div>
                                            <select  class="form-control form-control-line size " name="enterprise"  >
                                                <option value="0"  selected>Select Enterprise</option>
                                                <?php 
                                                // $enterprise = "SELECT * FROM enterprise";
                                                // $enterprisequery = $conn->query($enterprise);
                                                // while($enterpriserow =$enterprisequery->fetch_assoc()){?>
                                                <option value="<?php// echo $enterpriserow['id'] ?>"><?php// echo $enterpriserow['enterprise_name'] ?></option>

                                                <?php// }
                                                ?>
                                            </select>
                                        </div>
                                            <span class="text-danger">*</span>

                                </div>



                                <!-- ... (your existing HTML for business information) -->
                                <div class=" box-footer text-right">
                                    <button type="button" class="btn btn-dark waves-effect waves-light" onclick="backStep('step2', 'step1')">Back</button> 
                                    <button type="button"  onclick="nextStep('step2', 'step3')" class="btn btn-primary">Next</button>
                                </div>
                                
                            </div>

                            <div class="box-body" id="step3" style="display: none;">
                                <!-- Step 3: Address Information -->

                                <div class="input-group mb-3">
                                    <label for="address" class="col-sm-2 text-right control-label col-form-label text-muted">Address</label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-home"></i></span></div>
                                            <input type="text" class="form-control" id="zip" name="zip" placeholder="ZIP Code"  >
                                        </div>
                                            <span class="text-danger">*</span>
                                </div>

                                <div class="input-group mb-3">
                                    <label for="cono1" class="col-sm-2 text-right control-label col-form-label text-muted"></label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-home"></i></span></div>
                                            <input type="text" class="form-control" id="Street" name="street" placeholder="Street"    >
                                        </div>
                                </div>

                                <div class="input-group mb-3">
                                    <label for="cono1" class="col-sm-2 text-right control-label col-form-label text-muted"></label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-home"></i></span></div>
                                            <select  class="form-control form-control-line size " name="city" id="city"   >
                                                <option value="" disabled selected>Select City/Municipality</option>
                                            </select>
                                        </div>
                                </div>


                                <div class="input-group mb-3">
                                    <label for="cono1" class="col-sm-2 text-right control-label col-form-label text-muted"></label>

                                        <div class="input-group col-sm-8 col-xs-11">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-home"></i></span></div>
                                            <select  class="form-control form-control-line size " name="province" id="province"  >
                                                <option value="" disabled selected>Select Province</option>
                                            </select>
                                        </div>
                                </div>


                                <div class=" box-footer text-right">

                                    <button type="button" class="btn btn-dark waves-effect waves-light" onclick="backStep('step3', 'step2')">Back</button> 
                                    <!-- <button type="submit" class="btn btn-primary" name="merchant_action">Save</button> -->
                                    <button type="submit" class="btn btn-primary" name="register">Save</button>

                                </div>
                            </div>


                        </form>
                    
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>


</div>


<?php $this->view('includes/scripts')?>
<?php $this->view('includes/footer')?>


<script>
  function nextStep(currentStep, nextStep) {
  var isValid = validateStep(currentStep);

  if (isValid) {
    document.getElementById(currentStep).style.display = "none";
    document.getElementById(nextStep).style.display = "block";
  }
}

function backStep(currentStep, prevStep) {
  document.getElementById(currentStep).style.display = "none";
  document.getElementById(prevStep).style.display = "block";
}

function validateStep(step) {
  var isValid = true;
  var requiredFields = document.getElementById(step).querySelectorAll("[required]");

  requiredFields.forEach(function (field) {
    field.addEventListener("input", function () {
      if (!field.checkValidity()) {
        highlightField(field);
      } else {
        removeHighlight(field);
      }
    });

    // Initial check when the page loads
    if (!field.checkValidity()) {
      isValid = false;
      highlightField(field);
    } else {
      removeHighlight(field);
    }
  });

  return isValid;
}

function highlightField(field) {
  // Add a red border to the input field
  field.style.border = "2px solid red";
}

function removeHighlight(field) {
  // Remove the red border from the input field
  field.style.border = "1px solid #ced4da";  // Set the default border style
}

</script>