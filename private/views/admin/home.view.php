<?php $this->view('includes/header')?>
<?php $this->view('includes/menubar')?>
<?php $this->view('includes/sidebar')?>

<div class="content-wrapper " >

    <section class="content-header">
        <div class="card" style="position:absolute; top:20px;width:100%; padding:20px 0 20px 0; ">
            <h1 class = "dashboard">Dashboard</h1>
        
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                  <li ><a href="#" ><i class="fas fa-dashboard"> &nbsp;</i>Home &nbsp;</a> </li>
                  <li class="breadcrumb-item active"> /&nbsp;Dashboard</li>
                </ol
        </div>
        </div>
    </section>

<section class="content">
    <?php
    $location = "Perez BlvdDagupan, Pangasinan
    ";
    ?>

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

<section class="content">

</div>
<?php $this->view('includes/scripts')?>
<?php $this->view('includes/footer')?>
