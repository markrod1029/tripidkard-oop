<?php $this->view('includes/header')?>
<?php $this->view('includes/menubar')?>
<?php $this->view('includes/sidebar')?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="card" style="position:absolute; top:20px;width:100%; padding:20px 0 20px 0; ">

            <h1 class = "dashboard">Dashboard</h1>
            
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                    <li ><a href="#" ><i class="fas fa-dashboard"> &nbsp;</i>Home &nbsp;</a> </li>
                    <li class="breadcrumb-item active"> /&nbsp;Dashboard</li>
                    </ol>
                </div>
        </div>
    </section>


    <section class="content">

  <div class="row">

    <div class="col-sm-4">
      <div class="info-box">
        <span class="info-box-icon bg-primary"><i class="far fa-users"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Customer List</span>
          <?php
        //    $sql = "SELECT * FROM customer_code WHERE status = 1 AND enterprise_id = '$enterprise_id'";
        //    $query = $conn->query($sql);
        //   $totalofcustomer = number_format($query->num_rows);
          
          ?>
          <span class="info-box-number"> <?php //echo $totalofcustomer; ?></span>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="far fa-credit-card"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Customer Card List</span>
          <?php
        //    $sql = "SELECT * FROM customer_code WHERE status = 5 AND enterprise_id = '$enterprise_id'";
        //    $query = $conn->query($sql);
        //   $totalofcard = number_format($query->num_rows);
          
          ?>
          <span class="info-box-number"> <?php //echo $totalofcard; ?></span>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="info-box">
        <span class="info-box-icon bg-success"><i class="far fa-coins"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"> Loyalty Points</span>
          <?php
    //        $sql = "SELECT * FROM loyalty_points 
    //        LEFT JOIN
    //        business ON business.merchant_id = loyalty_points.merchant_id
    //    WHERE
    //        business.enterprise_id = '$enterprise_id' ";
    //    $query = $conn->query($sql);
    //    $totalOfPoints = $query->num_rows;
          ?>
          <span class="info-box-number"> <?php //echo $totalOfPoints; ?></span>
        </div>
      </div>
    </div>
    


  </div>

<?php $location = "Perez Blvd Dagupan City" ?>
<div class="container">

<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="100%" height="400" id="gmap_canvas" 
                src="https://maps.google.com/maps?q=<?php echo urlencode($location); ?>&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://putlocker-is.org"></a>
        <br>
    </div>
</div>
</div>



  </section>

</div>


<?php $this->view('includes/footer')?>
<?php $this->view('includes/scripts')?>
