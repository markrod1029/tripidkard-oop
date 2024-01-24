<?php 
$this->view('includes/header');
$this->view('includes/menubar');
$this->view('includes/sidebar');
?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="card" style="position:absolute; top:20px;width:100%; padding:20px 0 20px 0; ">
            <h1 class="dashboard">My Profile</h1>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <li><a href="home.php"><i class="fas fa-dashboard"> &nbsp;</i>Home &nbsp;</a> </li>
                    <li class="breadcrumb-item active"> /&nbsp;My Profile</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="row profile">
                <div class="col-lg-4 col-xlg-3">
                    <!--  profile/update_profile.php -->
                    <?php $this->view('profile/details')?>
                </div>

                    <div class="col-lg-8 col-xlg-3">
                        <div class="small-box bg-default" style="background-color:white;">
                            <ul class="nav nav-pills custom-pills" style="font-size:17px;">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#pills-timeline" role="tab" aria-controls="pills-timeline" aria-selected="true">Profile</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-business-tab" data-toggle="pill" href="#pills-business" role="tab" aria-controls="pills-business" aria-selected="false">Business</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-business-discount-tab" data-toggle="pill" href="#pills-business-discount" role="tab" aria-controls="pills-business-discount" aria-selected="false">Business Discount</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#pills-setting" role="tab" aria-controls="pills-setting" aria-selected="false">Security Setting</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="pills-images-tab" data-toggle="pill" href="#pills-images" role="tab" aria-controls="pills-images" aria-selected="false">Images</a>
                                </li>

                                
                            </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    
                                    <!-- Start Profile -->
                                    <div class="tab-pane fade show active" id="pills-timeline" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                        <div class="card-body">
                                            
                                            <form class="form-horizontal form-material" action="class/profile_crud.php" method="POST">
                                                <!--  profile/information.view.php -->
                                                <?php $this->view('profile/information')?>

                                            </form>
                                            
                                        </div>
                                    </div>
                                    <!-- End Profile -->

                                    <!-- Start Business -->
                                    <div class="tab-pane fade " id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">
                                        <div class="card-body">
                                            
                                            <form class="form-horizontal form-material" action="class/profile_crud.php" method="POST">
                                                <!--  profile/business.view.php -->
                                            <?php $this->view('profile/business')?>

                                            </form>
                                            
                                        </div>
                                    </div>

                                    <!-- End Business -->

                                    
                                    <!-- Start Business Discount-->
                                    <div class="tab-pane fade " id="pills-business-discount" role="tabpanel" aria-labelledby="pills-business-discount-tab">
                                        <div class="card-body">
                                            
                                            <form class="form-horizontal form-material" action="class/profile_crud.php" method="POST">
                                            <!--  profile/discount.view.php -->
                                            <?php $this->view('profile/discount')?>

                                            </form>
                                            
                                        </div>
                                    </div>

                                    <!-- End Business -->

                                    <!-- Start Change Password -->

                                    <div class="tab-pane fade" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
                                        <div class="card-body">
                                            <form class="form-horizontal form-material" action="class/profile_crud.php" method="POST">
                                                <!--  profile/security.view.php -->
                                            <?php $this->view('profile/security')?>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Change Password -->


                                    <!-- Start Change Images -->

                                    <div class="tab-pane fade" id="pills-images" role="tabpanel" aria-labelledby="pills-images-tab">
                                        <div class="card-body">
                                            <form class="form-horizontal form-material" action="class/profile_crud.php" method="POST" enctype="multipart/form-data">
                                                <!--  profile/images.view.php -->
                                            <?php $this->view('profile/images')?>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Change Images -->
                                    
                                </div>
                        </div>
                    </div>
        </div>
    </div>
</div>

        <?php $this->view('includes/scripts')?>
<?php $this->view('includes/footer')?>

